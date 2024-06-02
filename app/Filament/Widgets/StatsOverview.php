<?php

namespace App\Filament\Widgets;

use App\Models\Demande;
use App\Models\Dossier;
use App\Models\Payement;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '15s';
    protected static bool $isLazy = true;

    protected function getStats(): array
    {
        return [
            Stat::make(label: 'Total Demande', value: Demande::count())
                ->chart([3, 8, 9])
                ->color(color: 'success'),
            Stat::make(label: 'Total Dossier', value: Dossier::count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'danger'),
            Stat::make('No Payes', Payement::query()
                    ->join('demandes', 'payements.demande_id', '=', 'demandes.id')
                    ->where('payements.deja_paye', 0)
                    ->count())
                ->description(description: 'Nombre des demandes non payes')
                ->descriptionIcon(icon: 'heroicon-m-banknotes')
                ->descriptionColor(color: 'info')
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'info'),
        ];
    }
}
