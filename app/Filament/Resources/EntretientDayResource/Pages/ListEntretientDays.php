<?php

namespace App\Filament\Resources\EntretientDayResource\Pages;

use App\Filament\Resources\EntretientDayResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEntretientDays extends ListRecords
{
    protected static string $resource = EntretientDayResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
