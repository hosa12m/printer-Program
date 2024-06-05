<?php

namespace App\Filament\Resources\GlassResource\Pages;

use App\Filament\Resources\GlassResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageGlasses extends ManageRecords
{
    protected static string $resource = GlassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
