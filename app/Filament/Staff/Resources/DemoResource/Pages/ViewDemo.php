<?php

namespace App\Filament\Staff\Resources\DemoResource\Pages;

use App\Filament\Staff\Resources\DemoResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewDemo extends ViewRecord
{
    protected static string $resource = DemoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
