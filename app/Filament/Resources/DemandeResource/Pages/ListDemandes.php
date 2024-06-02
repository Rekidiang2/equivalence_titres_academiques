<?php

namespace App\Filament\Resources\DemandeResource\Pages;

use App\Filament\Resources\DemandeResource\Widgets\DemandeStat;
use App\Filament\Resources\DemandeResource;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;

class ListDemandes extends ListRecords
{
    protected static string $resource = DemandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            DemandeStat::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Tout'),
            'Payeé(s)' => Tab::make('Payeé(s)')->query(fn($query) => $query
                ->leftJoin('payements', 'demandes.id', '=', 'payements.demande_id')
                ->whereNotNull('payements.id')
                ->select('demandes.*')),  // Assuming 'demandes' is the table name for Demandes model
            'Non Payée(s)' => Tab::make('Non Payée(s)')->query(fn($query) => $query
                ->leftJoin('payements', 'demandes.id', '=', 'payements.demande_id')
                ->whereNull('payements.id')
                ->select('demandes.*')),
            'Sans Dossier' => Tab::make('Sans Dossier')->query(fn($query) => $query
                ->leftJoin('payements', 'demandes.id', '=', 'payements.demande_id')
                ->leftjoin('dossiers', 'demandes.id', '=', 'dossiers.demande_id')
                ->whereNotNull('payements.id')
                ->whereNull('dossiers.num_dossier')
                ->select('demandes.*')),
            // ->join('payements', 'demandes.id', '=', 'payements.demande_id')
            // ->whereNotNull('payements.id')
            // ->join('dossiers', 'demandes.id', '=', 'dossiers.demande_id')
            // ->whereNotNull('dossiers.num_dossier')
            // ->select('dossiers.*')),
            // 'Payeé(s)' => Tab::make()->query(fn($query) => $query->where('deja_paye', 1)),
            // 'Non Payée(s)' => Tab::make()->query(fn($query) => $query->where('deja_paye', 0)),
        ];
    }
}
