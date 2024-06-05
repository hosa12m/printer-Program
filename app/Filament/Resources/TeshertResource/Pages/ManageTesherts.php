<?php

namespace App\Filament\Resources\TeshertResource\Pages;

use App\Filament\Resources\TeshertResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageTesherts extends ManageRecords
{
    protected static string $resource = TeshertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
