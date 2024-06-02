<?php

namespace App\Filament\Resources\DossierResource\Widgets;

use App\Models\Dossier;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class DossierStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Attente Traitement', Dossier::query()->where('statut', 'Attente Traitement')->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'danger'),
            Stat::make('Vérification authenticité', Dossier::query()->where('statut', 'Vérification authenticité')->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'info'),
            Stat::make('Attente signature arrêté', Dossier::query()->where('statut', 'Attente signature arrêté')->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'danger'),
            Stat::make('Prêt à retirer', Dossier::query()->where('statut', 'Prêt à retirer')->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'info'),
            Stat::make('Rejeté', Dossier::query()->where('statut', 'Rejeté')->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'danger'),
            Stat::make('Archivé', Dossier::query()->where('statut', 'Archivé')->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'info'),
        ];
    }
}
