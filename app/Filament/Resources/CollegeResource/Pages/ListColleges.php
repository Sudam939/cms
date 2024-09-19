<?php

namespace App\Filament\Resources\CollegeResource\Pages;

use App\Filament\Resources\CollegeResource;
use App\Models\College;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListColleges extends ListRecords
{
    protected static string $resource = CollegeResource::class;

    protected function getHeaderActions(): array
    {
        if (College::count() <= 0) {
            return [
                Actions\CreateAction::make(),
            ];
        } else {
            return [];
        }
    }
}
