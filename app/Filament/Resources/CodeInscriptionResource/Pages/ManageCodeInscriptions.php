<?php

namespace App\Filament\Resources\CodeInscriptionResource\Pages;

use App\Filament\Resources\CodeInscriptionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCodeInscriptions extends ManageRecords
{
    protected static string $resource = CodeInscriptionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
