<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CourseTopic extends Model
{
    use HasFactory;

    /**
     * Get the course that owns the CourseTopic
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Get all of the course_lessons for the CourseTopic
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course_lessons(): HasMany
    {
        return $this->hasMany(CourseLesson::class);
    }
}
