<?php

namespace App\Filament\Widgets;

use Filament\Facades\Filament;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class PaysDossierChart extends ChartWidget
{
    protected static ?int $sort = 3;
    protected static ?string $heading = "Dossiers par Pays d'Etude";
    protected static string $color = 'danger';

    protected function getData(): array
    {
        $data = DB::table('demandes')
            ->select('pays_etude', DB::raw('count(*) as number_of_people'))
            ->groupBy('pays_etude')
            ->orderBy('number_of_people', 'desc')
            ->get();

        $labels = $data->pluck('pays_etude')->toArray();
        $peopleCount = $data->pluck('number_of_people')->toArray();

        return [
            'datasets' => [
                [
                    'label' => 'Nombre de Demande',
                    'data' => $peopleCount,
                    'fill' => true,  // Optional: remove fill for a clear line chart
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
