<?php

namespace App\Filament\Resources\ImagePostResource\Pages;

use App\Filament\Resources\ImagePostResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewImagePost extends ViewRecord
{
    protected static string $resource = ImagePostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
