<?php

namespace App\Filament\Resources\DemandeResource\Widgets;

use App\Models\Demande;
use App\Models\Payement;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Illuminate\Support\Number;

class DemandeStat extends BaseWidget
{
    protected function getStats(): array
    {
        // SELECT count(*) FROM demandes  LEFT JOIN payements ON demandes.id = payements.demande_id WHERE payements.demande_id IS  NULL LIMIT 100
        return [
            Stat::make('Demandes Non Payes', Demande::query()
                    ->leftJoin('payements', 'demandes.id', '=', 'payements.demande_id')
                    ->whereNull('payements.demande_id')
                    ->select('demandes.*')
                    ->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'danger'),
            Stat::make('Paiement Confirmation en Attente', Payement::query()->where('deja_paye', 0)->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'info'),
            Stat::make('Total Demandes', Demande::query()->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'danger'),
            // ->description('Depuis ' . $first_date . ' à Present'),
        ];
    }
}
