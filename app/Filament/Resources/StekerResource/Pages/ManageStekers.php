<?php

namespace App\Filament\Resources\StekerResource\Pages;

use App\Filament\Resources\StekerResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageStekers extends ManageRecords
{
    protected static string $resource = StekerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
