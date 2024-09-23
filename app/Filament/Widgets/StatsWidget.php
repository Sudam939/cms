<?php

namespace App\Filament\Widgets;

use App\Models\Faculty;
use App\Models\Student;
use App\Models\Term;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Faculty', Faculty::count()),
            Stat::make('Total Term', Term::count()),
            Stat::make('Total Students', Student::count()),
        ];
    }
}
