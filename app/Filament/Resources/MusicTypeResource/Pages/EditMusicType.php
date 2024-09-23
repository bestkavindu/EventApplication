<?php

namespace App\Filament\Resources\MusicTypeResource\Pages;

use App\Filament\Resources\MusicTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMusicType extends EditRecord
{
    protected static string $resource = MusicTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
