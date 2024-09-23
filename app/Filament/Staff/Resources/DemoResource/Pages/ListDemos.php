<?php

namespace App\Filament\Staff\Resources\DemoResource\Pages;

use App\Filament\Staff\Resources\DemoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDemos extends ListRecords
{
    protected static string $resource = DemoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
