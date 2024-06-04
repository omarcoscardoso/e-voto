<?php

namespace App\Filament\Resources\EleitorResource\Pages;

use App\Filament\Resources\EleitorResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateEleitor extends CreateRecord
{
    protected static string $resource = EleitorResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
