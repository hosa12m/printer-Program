<?php

namespace App\Filament\Resources\BagResource\Pages;

use App\Filament\Resources\BagResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBags extends ManageRecords
{
    protected static string $resource = BagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
