<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\DossierResource;
use App\Filament\Resources\PayementResource;
use App\Models\Demande;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Parfaitementweb\FilamentCountryField\Forms\Components\Country;

class DemandeRelationManager extends RelationManager
{
    protected static string $relationship = 'demande';

    public function form(Form $form): Form
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
                        FileUpload::make('identite_file')
                            ->label('Piece Identite')
                            ->directory('identites')
                            ->columnSpanFull(),
                        FileUpload::make('visa_file')
                            ->label('Preuve de Sejour')
                            ->directory('visas')
                            ->multiple()
                            ->columnSpanFull(),
                        Textarea::make('Adresse')
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

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('nom')
                    ->label('Requerant')
                    ->formatStateUsing(function ($state, Demande $order) {
                        return $order->nom . ' ' . $order->postnom . ' ' . $order->prenom;
                    }),
                ImageColumn::make('photo'),
                TextColumn::make('pays')
                    ->label("Pays d'Etudes"),
                TextColumn::make('genre'),
                TextColumn::make('grade'),
                TextColumn::make('option'),
                IconColumn::make('payement.deja_paye')
                    ->label('Payé')
                    ->boolean(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make()
                    ->label('Voir'),
                Tables\Actions\Action::make('edit')
                    ->label('Payement')
                    ->icon('heroicon-m-banknotes')
                    ->url(function (Demande $record): string {
                        return PayementResource::getUrl('create', [
                            'record' => $record,
                            'nom' => $record->nom,
                            'postnom' => $record->postnom,
                            'prenom' => $record->prenom,
                        ]);
                    })
                    ->visible(function ($record) {
                        return ((!isset($record->payement->deja_paye)));
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
