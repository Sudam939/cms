<?php

namespace App\Filament\Widgets;

use App\Models\Faculty;
use App\Models\Student;
use Filament\Widgets\ChartWidget;

class StudentFaculty extends ChartWidget
{
    protected static ?string $heading = 'Student Faculties';

    protected int| array |string $columnSpan = 'full';

    protected function getData(): array
    {
        $faculties = Faculty::all();
        $students = [];

        foreach($faculties as $faculty){
            $students[] = Student::where('faculty_id', $faculty->id)->count();
        }
        return [
            'datasets' => [
                [
                    'label' => 'Student in Faculty',
                    'data' => $students,
                ],
            ],
            'labels' => $faculties->pluck('name'),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
