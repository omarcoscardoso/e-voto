<?php

namespace App\Filament\Resources\EleitorResource\Pages;

use App\Filament\Resources\EleitorResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEleitors extends ListRecords
{
    protected static string $resource = EleitorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
