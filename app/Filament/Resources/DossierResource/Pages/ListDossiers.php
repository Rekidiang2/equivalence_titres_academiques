<?php

namespace App\Filament\Resources\DossierResource\Pages;

use App\Filament\Resources\DossierResource\Widgets\DossierStat;
use App\Filament\Resources\DossierResource;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;

class ListDossiers extends ListRecords
{
    protected static string $resource = DossierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            DossierStat::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Tout'),
            'Attente Traitement' => Tab::make()->query(fn($query) => $query->where('statut', 'Attente Traitement')),
            'Vérification authenticité' => Tab::make()->query(fn($query) => $query->where('statut', 'Vérification authenticité')),
            'Attente signature arrêté' => Tab::make()->query(fn($query) => $query->where('statut', 'Attente signature arrêté')),
            'Prêt à retirer' => Tab::make()->query(fn($query) => $query->where('statut', 'Prêt à retirer')),
            'Rejeté' => Tab::make()->query(fn($query) => $query->where('statut', 'Rejeté')),
            'Archivé' => Tab::make()->query(fn($query) => $query->where('statut', 'Archivé')),
        ];
    }
}
