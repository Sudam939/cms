<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;


    /**
     * Get all of the course_topics for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course_topics(): HasMany
    {
        return $this->hasMany(CourseTopic::class);
    }
}
