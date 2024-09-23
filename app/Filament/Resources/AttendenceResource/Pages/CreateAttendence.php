<?php

namespace App\Filament\Resources\AttendenceResource\Pages;

use App\Filament\Resources\AttendenceResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateAttendence extends CreateRecord
{
    protected static string $resource = AttendenceResource::class;

    protected function getCreatedNotification(): ?Notification
    {
        return  Notification::make()
                    ->title('Attendence Created')
                    ->body('Changes to the post have been saved.')
                    ->success()
                    ->persistent()
                    ->send();
    }
}
