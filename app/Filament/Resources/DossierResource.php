<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DossierResource\Pages;
use App\Filament\Resources\DossierResource\RelationManagers;
use App\Filament\Resources\UserResource\RelationManagers\DossierRelationManager;
use App\Models\Demande;
use App\Models\Dossier;
use Doctrine\DBAL\Schema\Column;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\ToggleButtons;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class DossierResource extends Resource
{
    protected static ?string $model = Dossier::class;

    protected static ?string $navigationIcon = 'heroicon-o-folder';

    public static function form(Form $form): Form
    {
        $request = request();
        $iddemande = $request->query('record');
        $non = $request->query('nom');
        $postnon = $request->query('postnom');
        $prenon = $request->query('prenom');
        $grade = $request->query('grade');
        $option = $request->query('option');
        $pays = $request->query('pays');
        $email = $request->query('email');
        $etab_email1 = $request->query('etab_email1');
        $payement_id = $request->query('payement_id');
        $user_id = $request->query('user_id');
        $user_name = $request->query('user_name');
        $etablissement = $request->query('etablissement');

        $yearMonth = date('Ym');

        // Generate a random number of 4 characters
        $randomNumber = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);

        // Concatenate year, month, and random number
        $dosnum = $yearMonth . '-' . $randomNumber;

        return $form
            ->schema([
                Group::make()
                    ->schema([
                        Section::make('Demade Info')
                            ->schema([
                                // Requerant Section
                                Group::make()->schema([
                                    Section::make('Requerant')
                                        ->schema([
                                            Placeholder::make('nom')->label('Requerant')->content(isset($non) ? $non . ' ' . $postnon . ' ' . $prenon : function ($state, Dossier $order) {
                                                return $order->demande->nom . ' ' . $order->demande->postnom . ' ' . $order->demande->prenom;
                                            }),
                                            Placeholder::make('grade')->label('Titre Obtenu')->content(isset($grade) ? $grade . ' en ' . $option : function ($state, Dossier $order) {
                                                return $order->demande->grade . ' en ' . $order->demande->option;
                                            }),
                                            Placeholder::make('email')->label('Email du concerne')->content(isset($email) ? $email : function ($state, Dossier $order) {
                                                return $order->demande->email;
                                            }),
                                        ])
                                        ->columns(2)
                                ]),
                                // Etablissement Section
                                Group::make()->schema([
                                    Section::make('Etablissement')
                                        ->schema([
                                            Placeholder::make('nom_fr')->label("Nom de L'Etablissement")->content(isset($etablissement) ? $etablissement : function ($state, Dossier $order) {
                                                return $order->demande->nom_fr;
                                            }),
                                            Placeholder::make('pays')->label("Pays d'Etude")->content(isset($pays) ? $pays : function ($state, Dossier $order) {
                                                return $order->demande->pays;
                                            }),
                                            Placeholder::make('etab_email1')->label("Email de l'Etablissement")->content(isset($etab_email1) ? $etab_email1 : function ($state, Dossier $order) {
                                                return $order->demande->etab_email1;
                                            }),
                                        ])
                                        ->columns(2),
                                ])
                            ])
                            ->columns(2)
                            ->extraAttributes(['style' => 'background-color:#ccc'])
                    ])
                    ->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Dossier Info')->schema([
                        TextInput::make('num_dossier')
                            ->default($dosnum)
                            ->label('N° de Dossier')
                            ->columnSpanFull(),
                        ToggleButtons::make('statut')
                            ->inline()
                            ->default('Attente Traitement')
                            ->required()
                            ->options([
                                'Attente Traitement' => 'Attente Traitement',
                                'Vérification authenticité' => "Vérification de l'authenticité",
                                'Attente signature arrêté' => "Attente signature de l'arrêté",
                                'Prêt à retirer' => 'Prêt à retirer',
                                'Rejeté' => 'Rejeté',
                                'Archivé' => 'Archivé'
                            ])
                            ->colors([
                                'Attente Traitement' => 'info',
                                'Vérification authenticité' => 'info',
                                'Attente signature arrêté' => 'warning',
                                'Prêt à retirer' => 'success',
                                'Rejeté' => 'danger',
                                'Archivé' => 'success'
                            ])
                            ->icons([
                                'Attente Traitement' => 'heroicon-m-sparkles',
                                'Vérification authenticité' => 'heroicon-m-sparkles',
                                'Attente signature arrêté' => 'heroicon-m-arrow-path',
                                'Prêt à retirer' => 'heroicon-m-truck',
                                'Rejeté' => 'heroicon-m-x-circle',
                                'Archivé' => 'heroicon-m-check-badge'
                            ])
                            ->label('Statut du Dossier')
                            ->columnSpanFull(),
                        Textarea::make('grade_equivalenmt')
                            ->columnSpanFull(),
                        Textarea::make('observation')
                            ->columnSpanFull(),
                    ])
                ])->columnSpanFull(),
                Section::make()->schema([
                    TextInput::make('id')
                        ->label('Dossier ID')
                        ->default($iddemande)
                        ->disabled()
                        ->dehydrated(),
                    TextInput::make('user_id')
                        ->label('User ID')
                        ->default($user_id)
                        ->disabled()
                        ->dehydrated(),
                    TextInput::make('demande_id')
                        ->label('Demande ID')
                        ->default($iddemande)
                        ->disabled()
                        ->dehydrated(),
                ])->columns(3)
            ]);
    }

    public static function table(Table $table): Table
    {
        $deja = DB::table('payements')->where('demande_id', 1)->value('deja_paye');

        return $table
            ->columns([
                TextColumn::make('num_dossier')
                    ->searchable()
                    ->label('Numero Dossier'),
                TextColumn::make('demande.nom')
                    ->searchable()
                    ->label('Concerne'),
                TextColumn::make('demande.fullName')
                    ->searchable()
                    ->label('Concerne'),
                TextColumn::make('demande.grade')
                    ->label('Grade'),
                TextColumn::make('demande.option')
                    ->label('Option'),
                TextColumn::make('demande.pays')
                    ->label("Pays d'Etude"),
                // IconColumn::make('deja_paye')
                // ->default($deja)
                // ->boolean()
                // ->label('Paye'),
                TextColumn::make('statut')
                    ->label('Statut')
                    ->sortable()
                    ->searchable()
                    ->color('info')
                    ->icon('heroicon-m-sparkles')
                    ->badge(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ActionGroup::make([
                    Tables\Actions\Action::make('Voir Demande')
                        ->url(fn(Dossier $record): string => DemandeResource::getUrl('view', ['record' => $record])),
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // DossierRelationManager::class,
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDossiers::route('/'),
            'create' => Pages\CreateDossier::route('/create'),
            'view' => Pages\ViewOrder::route('/{record}'),
            'edit' => Pages\EditDossier::route('/{record}/edit'),
        ];
    }
}
