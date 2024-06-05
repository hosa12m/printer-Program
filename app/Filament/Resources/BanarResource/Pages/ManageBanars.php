<?php

namespace App\Filament\Resources\BanarResource\Pages;

use App\Filament\Resources\BanarResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBanars extends ManageRecords
{
    protected static string $resource = BanarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
