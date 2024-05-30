<?php

namespace App\Filament\Resources\AssembleiaResource\Pages;

use App\Filament\Resources\AssembleiaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAssembleia extends CreateRecord
{
    protected static string $resource = AssembleiaResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
