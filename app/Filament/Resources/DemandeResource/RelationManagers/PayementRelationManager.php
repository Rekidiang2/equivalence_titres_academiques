<?php

namespace App\Filament\Resources\DemandeResource\RelationManagers;

use App\Models\Payement;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
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

class PayementRelationManager extends RelationManager
{
    protected static string $relationship = 'payement';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('demande_id')
                    ->label('Requerant')
                    // ->options(['1' => 'One', '2' => 'Two', '3' => 'Three'])
                    ->searchable()
                    ->preload()
                    ->relationship('demande', 'postnom'),
                TextInput::make('demande_id')
                    ->required(),
                TextInput::make('montant_cdf')
                    ->required(),
                TextInput::make('montant_usd')
                    ->required(),
                FileUpload::make('preuve_paiement')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('deja_paye')
                    ->columnSpanFull()
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('id')
                    ->label('Payement ID'),
                TextColumn::make('demande_id')
                    ->label('Demande ID'),
                TextColumn::make('demande.nom')
                    ->label('Concerne')
                    ->formatStateUsing(function ($state, Payement $order) {
                        return $order->demande->nom . ' ' . $order->demande->postnom . ' ' . $order->demande->prenom;
                    }),
                TextColumn::make('montant_cdf'),
                TextColumn::make('montant_usd'),
                // ImageColumn::make('preuve_paiement'),
                IconColumn::make('deja_paye')
                    ->boolean()
                    ->label('Confirmation'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
