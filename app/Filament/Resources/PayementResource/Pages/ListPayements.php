<?php

namespace App\Filament\Resources\PayementResource\Pages;

use App\Filament\Resources\DossierResource\Widgets\DossierStat;
use App\Filament\Resources\PayementResource\Widgets\PayementStat;
use App\Filament\Resources\PayementResource;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;

class ListPayements extends ListRecords
{
    protected static string $resource = PayementResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getHeaderWidgets(): array
    {
        return [
            PayementStat::class,
        ];
    }

    public function getTabs(): array
    {
        return [
            null => Tab::make('Tout'),
            'Confirmé(s)' => Tab::make()->query(fn($query) => $query->where('deja_paye', 1)),
            'Non Confirmé(s)' => Tab::make()->query(fn($query) => $query->where('deja_paye', 0)),
        ];
    }
}
