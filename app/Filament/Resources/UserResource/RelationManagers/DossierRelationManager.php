<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Filament\Resources\DemandeResource;
use App\Filament\Resources\PayementResource;
use App\Models\Demande;
use App\Models\Dossier;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Forms;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class DossierRelationManager extends RelationManager
{
    protected static string $relationship = 'dossier';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function isReadOnly(): bool
    {
        return false;
    }

    public function table(Table $table): Table
    {
        $deja = DB::table('payements')->where('demande_id', 1)->value('deja_paye');
        return $table
            ->recordTitleAttribute('id')
            ->columns([
                TextColumn::make('num_dossier')
                    ->label('Numero Dossier'),
                TextColumn::make('demande.nom')
                    ->label('Concerne')
                    ->formatStateUsing(function ($state, Dossier $order) {
                        return $order->demande->nom . ' ' . $order->demande->postnom . ' ' . $order->demande->prenom;
                    }),
                TextColumn::make('demande.nom')
                    ->label('Concerne')
                    ->formatStateUsing(function ($state, Dossier $order) {
                        return $order->demande->nom . ' ' . $order->demande->postnom . ' ' . $order->demande->prenom;
                    }),
                TextColumn::make('demande.grade')
                    ->label('Grade'),
                TextColumn::make('demande.option')
                    ->label('Option'),
                TextColumn::make('demande.pays_etude')
                    ->label("Pays d'Etude"),

                /*
                 * IconColumn::make($deja)
                 *     ->default($deja)
                 *     ->boolean()
                 *     ->label('Paye'),
                 */
                TextColumn::make('statut')
                    ->label('Statut')
                    ->color('info')
                    ->icon('heroicon-m-sparkles')
                    ->badge(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
                // Tables\Actions\DeleteAction::make(),
                Tables\Actions\Action::make('edit')
                    ->label('Suivi')
                    ->icon('heroicon-m-newspaper')
                // ->url(function (Demande $record): string {return DemandeResource::getUrl('create', ['record' => $record]);})
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}
