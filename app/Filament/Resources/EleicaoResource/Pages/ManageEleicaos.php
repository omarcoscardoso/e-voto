<?php

namespace App\Filament\Resources\EleicaoResource\Pages;

use App\Filament\Resources\EleicaoResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEleicaos extends ManageRecords
{
    protected static string $resource = EleicaoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
