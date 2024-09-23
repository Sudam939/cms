<?php

namespace App\Filament\Staff\Resources\DemoResource\Pages;

use App\Filament\Staff\Resources\DemoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDemo extends CreateRecord
{
    protected static string $resource = DemoResource::class;
}
