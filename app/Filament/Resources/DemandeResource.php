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
                    Section::make('Information Personnelle')
                        ->schema([
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
                            TextInput::make('email_requerant')
                                ->label('Email')
                                ->email()
                                ->required(),
                            TextInput::make('phone_requerant')
                                ->tel()
                                ->label('Telephone')
                                ->required()
                                ->columns(2),
                            Textarea::make('addresse_requerant')
                                ->label('Addresse')
                                ->columnSpanFull(),
                        ])
                        ->columns(3)
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make("Information de l'Universite")->schema([
                        TextInput::make('nom_univ_origine')
                            ->label("Non de l'Universite"),
                        TextInput::make('nom_univ_fr')
                            ->label("Non de l'Universite en fracais"),
                        Select::make('secteur_univ')
                            ->label('Secteur (Public ou Prive)')
                            ->options([
                                'public' => 'Public',
                                'prive' => 'Prive',
                            ]),
                        DatePicker::make('date_creation')
                            ->label('Date de Creation'),
                        Country::make('pays_etude')
                            ->label("Pays d'Etude"),
                        TextInput::make('province_ville_etude')
                            ->label('Province ou Ville'),
                        TextInput::make('siteweb_univ')
                            ->label('Site Web'),
                        TextInput::make('email_univ')
                            ->label("Email de l'Universite"),
                        TextInput::make('phone_univ')
                            ->label("Telephone de l'Universite"),
                    ])->columns(3)
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Cursus Academique')->schema([
                        Select::make('grade')
                            ->options([
                                'licence' => 'Licence',
                                'master' => 'Master',
                                'docteur' => 'Docteur (PhD)',
                            ]),
                        TextInput::make('option'),
                        TextInput::make('num_diplome')
                            ->label('Numero du DErnier Diplome'),
                        DatePicker::make('date_diplome')
                            ->label('Date Delivrance Diplome'),
                        DatePicker::make('date_debut_cursus'),
                        DatePicker::make('date_fin_cursus'),
                        Select::make('mode_enseignement')
                            ->options([
                                'presentiel' => 'Presentiel',
                                'online' => 'Online',
                                'mixte' => 'Mixte',
                            ])
                            ->columnSpanFull(),
                    ])->columns(3)
                ])->columnSpanFull(),
                Group::make()->schema([
                    Section::make('Joindre Documents')->schema([
                        FileUpload::make('piece_identite_copy')
                            ->label('Piece Identite')
                            ->openable()
                            ->directory('pieces_identite'),
                        FileUpload::make('preuve_sejour_copy')
                            ->label('Preuve de Sejour')
                            ->directory('preuve_sejour')
                            ->openable()
                            ->multiple(),
                        FileUpload::make('lettre_demande_copy')
                            ->label('Lettre de Demande')
                            ->openable()
                            ->directory('lettre_demande'),
                        FileUpload::make('diplome_base_copy')
                            ->label('Diplome de Base')
                            ->openable()
                            ->directory('diplome_base'),
                        FileUpload::make('diplome_univ_copy')
                            ->label('Diplomes Universitaires')
                            ->directory('diplome_univ')
                            ->openable()
                            ->multiple(),
                        FileUpload::make('releve_cote_copy')
                            ->label('Releves de cote')
                            ->directory('releve_cote')
                            ->openable()
                            ->multiple(),
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
                TextColumn::make('pays_etude')
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
                            'pays_etude' => $record->pays_etude,
                            'email_requerant' => $record->email_requerant,
                            'email_univ' => $record->email_univ,
                            // 'payement_id' => optional($record->payement->demande)->id,  // Using optional() to safely access nested properties
                            'user_id' => $record->user_id,
                            'user_name' => $record->user->name,
                            'nom_univ_fr' => $record->nom_univ_fr,
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
