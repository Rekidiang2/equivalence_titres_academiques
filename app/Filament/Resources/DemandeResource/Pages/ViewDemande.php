<?php

namespace App\Filament\Resources\DemandeResource\Pages;

use App\Filament\Resources\DemandeResource;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;

class ViewDemande extends ViewRecord
{
    protected static string $resource = DemandeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
