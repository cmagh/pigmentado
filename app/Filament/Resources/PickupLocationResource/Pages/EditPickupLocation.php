<?php

namespace App\Filament\Resources\PickupLocationResource\Pages;

use App\Filament\Resources\PickupLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPickupLocation extends EditRecord
{
    protected static string $resource = PickupLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
