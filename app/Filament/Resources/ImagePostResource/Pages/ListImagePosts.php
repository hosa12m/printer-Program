<?php

namespace App\Filament\Resources\ImagePostResource\Pages;

use App\Filament\Resources\ImagePostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListImagePosts extends ListRecords
{
    protected static string $resource = ImagePostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
