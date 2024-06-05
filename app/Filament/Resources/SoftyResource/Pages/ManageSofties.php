<?php

namespace App\Filament\Resources\SoftyResource\Pages;

use App\Filament\Resources\SoftyResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageSofties extends ManageRecords
{
    protected static string $resource = SoftyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
