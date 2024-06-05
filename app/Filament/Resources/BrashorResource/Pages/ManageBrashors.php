<?php

namespace App\Filament\Resources\BrashorResource\Pages;

use App\Filament\Resources\BrashorResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageBrashors extends ManageRecords
{
    protected static string $resource = BrashorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
