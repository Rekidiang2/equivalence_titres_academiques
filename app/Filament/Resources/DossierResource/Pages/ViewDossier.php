<?php

namespace App\Filament\Resources\DossierResource\Pages;

use App\Filament\Resources\DossierResource;
use App\Models\Dossier;
use Filament\Resources\Pages\ViewRecord;
use Filament\Actions;

class ViewOrder extends ViewRecord
{
    protected static string $resource = DossierResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
