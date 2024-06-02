<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Illuminate\Support\Facades\DB;

class UserStat extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Utilisateurs Sans Demande', User::leftJoin('demandes', 'users.id', '=', 'demandes.user_id')
                    ->whereNull('demandes.user_id')
                    ->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'info'),
            Stat::make('Utilisateurs Avec +1 Demande', User::select(DB::raw('count(DISTINCT users.id) as num_users'))
                    ->join('demandes', 'users.id', '=', 'demandes.user_id')
                    ->groupBy('users.id')
                    ->havingRaw('count(*) >= 2')
                    ->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'success'),
            Stat::make('Total Utilisateurs', User::query()->count())
                ->chart([3, 8, 9, 5, 2])
                ->color(color: 'danger'),
        ];
    }
}
