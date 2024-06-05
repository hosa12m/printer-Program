<?php

namespace App\Filament\Resources\HoldResource\Pages;

use App\Filament\Resources\HoldResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageHolds extends ManageRecords
{
    protected static string $resource = HoldResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
