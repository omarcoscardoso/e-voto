<?php

namespace App\Filament\Resources\AssembleiaResource\Pages;

use App\Filament\Resources\AssembleiaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssembleias extends ListRecords
{
    protected static string $resource = AssembleiaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
