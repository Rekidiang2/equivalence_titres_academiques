<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\DossierResource;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables;
use Illuminate\Support\Facades\DB;

class DernierDossiers extends BaseWidget
{
    // protected int|string|array $columnSpan = 'full';
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        $deja = DB::table('payements')->where('demande_id', 1)->value('deja_paye');
        return $table
            ->query(DossierResource::getEloquentQuery()->latest())
            ->defaultPaginationPageOption(3)
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('num_dossier')
                    ->label('Numero Dossier'),
                TextColumn::make('demande.fullName')
                    ->searchable()
                    ->sortable()
                    ->label('Concerne'),
                TextColumn::make('demande.pays')
                    ->searchable()
                    ->label("Pays d'Etude"),
                IconColumn::make('deja_paye')
                    ->default($deja)
                    ->boolean()
                    ->label('Paye'),
                TextColumn::make('statut')
                    ->label('Statut')
                    ->sortable()
                    ->searchable()
                    ->color('info')
                    ->icon('heroicon-m-sparkles')
                    ->badge(),
            ]);
    }
}
