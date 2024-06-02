<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DemandeResource\RelationManagers\PayementRelationManager;
use App\Filament\Resources\DemandeResource\Pages;
use App\Filament\Resources\DemandeResource\RelationManagers;
use App\Models\Demande;
use App\Models\Dossier;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
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
use Illuminate\Validation\Rules\Exists;
use Parfaitementweb\FilamentCountryField\Forms\Components\Country;

class DemandeResource extends Resource
{
    protected static ?string $model = Demande::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-raised';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Identite')->schema([
                        FileUpload::make('photo')
                            ->label('Votre Photo')
                            ->directory('photos')
                            ->columnSpanFull(),
                        Select::make('user_id')
                            ->label('Customer')
                            ->relationship('user', 'name')
                            ->searchable()
                            ->preload()
                            ->required(),
                        TextInput::make('nom')
                            ->required(),
                        TextInput::make('postnom')
                            ->required(),
                        TextInput::make('prenom')
                            ->required(),
                        Select::make('genre')
                            ->options([
                                'masculin' => 'Masculin',
                                'feminin' => 'Feminin'
                            ])
                            ->required(),
                        TextInput::make('lieu_naissance')
                            ->required(),
                        DatePicker::make('date_naissance')
                            ->required(),
                        Country::make('nationalite'),
                        Select::make('type_identite')
                            ->options([
                                'passport' => 'PassPort',
                                'carte_identite' => "Carte d'Identite",
                            ])
                            ->required(),
                        TextInput::make('numero_identite')
                            ->required(),
                        TextInput::make('email')
                            ->email()
                            ->required(),
                        TextInput::make('phone')
                            ->tel()
                            ->label('Telephone')
                            ->required()
                            ->columns(2),
                        Textarea::make('Adresse')
                            ->columnSpanFull(),
                        FileUpload::make('identite_file')
                            ->label('Piece Identite')
                            ->directory('identites')
                            ->columnSpanFull(),
                        FileUpload::make('visa_file')
                            ->label('Preuve de Sejour')
                            ->directory('visas')
                            ->multiple()
                            ->columnSpanFull(),
                        FileUpload::make('visa_file_')
                            ->label('Lettre de Demande')
                            ->directory('lettre_demande')
                            ->columnSpanFull(),
                    ])->columns(3)
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Institution de Formation')->schema([
                        TextInput::make('nom_origine'),
                        TextInput::make('nom_fr')
                            ->label('Non en fracais'),
                        Select::make('secteur')
                            ->options([
                                'public' => 'Public',
                                'prive' => 'Prive',
                            ]),
                        TextInput::make('annee_creation')
                            ->label('Annee de Creation'),
                        Country::make('pays')
                            ->label("Pays d'Etude"),
                        TextInput::make('province_ville')
                            ->label('Province ou Ville'),
                        TextInput::make('siteweb')
                            ->label('Site Web'),
                        TextInput::make('etab_email1')
                            ->label('Email 1'),
                        TextInput::make('etab_email2')
                            ->label('Email 2'),
                        TextInput::make('etab_phone1')
                            ->label('Telephone 1'),
                        TextInput::make('etab_phone2')
                            ->label('Telephone 2'),
                    ])->columns(3)
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Cursus Academique')->schema([
                        TextInput::make('grade'),
                        TextInput::make('option'),
                        TextInput::make('num_diplome'),
                        DatePicker::make('date_delivrance'),
                        DatePicker::make('date_debut_cursus'),
                        DatePicker::make('date_fin_cursus'),
                        FileUpload::make('diplome_file')
                            ->label('Joindre vos diplomes')
                            ->directory('diplomes')
                            ->multiple()
                            ->columnSpanFull(),
                        FileUpload::make('releve_file')
                            ->label('Joindre vos Releves de cote')
                            ->directory('releves')
                            ->multiple()
                            ->columnSpanFull(),
                    ])->columns(3)
                ])->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        $dossier_id = DB::table('dossiers')->where('demande_id', 1)->value('id');

        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('fullName')
                    ->label('Requerant')
                    ->searchable()
                    ->sortable(),
                ImageColumn::make('photo'),
                TextColumn::make('pays')
                    ->label("Pays d'Etudes"),
                TextColumn::make('genre'),
                TextColumn::make('grade'),
                TextColumn::make('option'),
                IconColumn::make('payement.demande_id')
                    ->default(0)
                    ->label('Payés')
                    ->boolean(),

                /*
                 * IconColumn::make('dossier.demande_id')
                 *     ->label('Dossier')
                 *     ->boolean(function ($record) {
                 *         // Access dossier.demande_id property directly
                 *         // Convert true to 1 and false to 0
                 *         return isset($record->dossier->demande_id) ? 1 : 0;
                 *     })
                 *     ->icon(function ($record) {
                 *         // Define your logic to determine the icon based on the value
                 *         return isset($record->dossier->demande_id) ? 'heroicon-s-check-circle' : 'heroicon-s-x-circle';
                 *     }),
                 */
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('edit')
                    ->label('Créer un Dossier')
                    ->url(function (Demande $record): string {
                        return DossierResource::getUrl('create', [
                            'record' => $record,
                            'nom' => $record->nom,
                            'postnom' => $record->postnom,
                            'grade' => $record->grade,
                            'option' => $record->option,
                            'prenom' => $record->prenom,
                            'pays' => $record->pays,
                            'email' => $record->email,
                            'etab_email1' => $record->etab_email1,
                            // 'payement_id' => optional($record->payement->demande)->id,  // Using optional() to safely access nested properties
                            'user_id' => $record->user_id,
                            'user_name' => $record->user->name,
                            'etablissement' => $record->nom_fr,
                        ]);
                    })
                    ->icon('heroicon-m-pencil')
                    // ->visible(fn($record) => $record->payement->deja_paye == true && $record->dossier || $record->dossier->demande_id !== null),
                    ->visible(function ($record) {
                        return ((!isset($record->payement->deja_paye)) ? 0 : (($record->payement->deja_paye == 1) ? 1 : 0) && empty($record->dossier && $record->dossier->demande_id));
                    }),
                // ->visible(function ($record) {
                // return ($record->dossier && $record->dossier->demande_id == null && $record->payement->deja_paye);
                // }),

                /*
                 * Tables\Actions\Action::make('view')
                 *     ->url(function (Demande $record): string {
                 *         return DossierResource::getUrl('view', [$record]);
                 *     })
                 *     ->icon('heroicon-m-sparkles')
                 *     ->label('Dossier existe')
                 *     ->visible(function ($record) {
                 *         return ($record->dossier && $record->dossier->demande_id !== null);
                 *     }),
                 */
                Tables\Actions\ActionGroup::make([
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
            PayementRelationManager::class,
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListDemandes::route('/'),
            'create' => Pages\CreateDemande::route('/create'),
            'view' => Pages\ViewDemande::route('/{record}'),
            'edit' => Pages\EditDemande::route('/{record}/edit'),
        ];
    }
}

$statuts = array(
    'En attente de paiement' => 'En attente de paiement',
    'Confirmation de paiement en cours' => 'Confirmation de paiement en cours',
    'Vérification des éléments de la demande' => 'Vérification des éléments de la demande'
);
