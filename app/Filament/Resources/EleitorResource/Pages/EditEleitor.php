<?php

namespace App\Filament\Resources\EleitorResource\Pages;

use App\Filament\Resources\EleitorResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEleitor extends EditRecord
{
    protected static string $resource = EleitorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
