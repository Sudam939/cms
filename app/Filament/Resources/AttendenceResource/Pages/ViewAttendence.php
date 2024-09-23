<?php

namespace App\Filament\Resources\AttendenceResource\Pages;

use App\Filament\Resources\AttendenceResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAttendence extends ViewRecord
{
    protected static string $resource = AttendenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
