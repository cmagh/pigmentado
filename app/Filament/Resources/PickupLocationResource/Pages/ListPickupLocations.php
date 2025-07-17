<?php

namespace App\Filament\Resources\PickupLocationResource\Pages;

use App\Filament\Resources\PickupLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPickupLocations extends ListRecords
{
    protected static string $resource = PickupLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
