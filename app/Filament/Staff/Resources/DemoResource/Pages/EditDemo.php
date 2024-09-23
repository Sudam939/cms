<?php

namespace App\Filament\Staff\Resources\DemoResource\Pages;

use App\Filament\Staff\Resources\DemoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDemo extends EditRecord
{
    protected static string $resource = DemoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
