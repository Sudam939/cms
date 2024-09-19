<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseLesson extends Model
{
    use HasFactory;

    /**
     * Get the course_topic that owns the CourseLesson
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course_topic(): BelongsTo
    {
        return $this->belongsTo(CourseTopic::class);
    }
}
