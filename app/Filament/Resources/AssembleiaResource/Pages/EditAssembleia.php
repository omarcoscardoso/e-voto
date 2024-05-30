<?php

namespace App\Filament\Resources\AssembleiaResource\Pages;

use App\Filament\Resources\AssembleiaResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssembleia extends EditRecord
{
    protected static string $resource = AssembleiaResource::class;

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
