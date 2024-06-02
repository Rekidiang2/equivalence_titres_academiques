<?php

namespace App\Filament\Resources\PayementResource\Widgets;

use App\Models\Payement;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Number;

class PayementStat extends BaseWidget
{
    protected function getStats(): array
    {
        $first_date = DB::table('payements')
            ->select('created_at')
            ->orderBy('created_at', 'asc')
            ->limit(1)
            ->pluck('created_at')  // Pluck the value directly
            ->first();  // Fetching the earliest created_at date

        $currentYear = date('Y');

        $first_date_formatted = \Carbon\Carbon::parse($first_date)->format('d-m-Y');  // Format the date

        return [
            Stat::make('Payement Non Confimer', Payement::query()->where('deja_paye', 0)->count())
                ->chart([3, 8, 9, 5, 2])
                ->description('Nombre des demandes payees mais non confirmees')
                ->color(color: 'danger'),
            Stat::make('Total Rectte Mobilisee', Number::currency(Payement::query()->sum('montant_cdf'), 'CDF'))
                ->description('Depuis le ' . $first_date_formatted . ' à Present')  // Use formatted date
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'info'),
            Stat::make("Rectte Mobilisee Pour l'annee en cours", Number::currency(Payement::whereYear('date_bordereau', $currentYear)->sum('montant_cdf'), 'CDF'))
                ->description('>>> Annee : ' . $currentYear . ' >>>')
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'success'),
        ];
    }
}
