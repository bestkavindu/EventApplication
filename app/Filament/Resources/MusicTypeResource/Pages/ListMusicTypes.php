<?php

namespace App\Filament\Resources\MusicTypeResource\Pages;

use App\Filament\Resources\MusicTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMusicTypes extends ListRecords
{
    protected static string $resource = MusicTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
