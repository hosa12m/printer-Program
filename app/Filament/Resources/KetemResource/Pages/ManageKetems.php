<?php

namespace App\Filament\Resources\KetemResource\Pages;

use App\Filament\Resources\KetemResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageKetems extends ManageRecords
{
    protected static string $resource = KetemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
