<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CourseLesson;
use App\Models\User;

class CourseLessonPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any CourseLesson');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CourseLesson $courselesson): bool
    {
        return $user->checkPermissionTo('view CourseLesson');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create CourseLesson');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CourseLesson $courselesson): bool
    {
        return $user->checkPermissionTo('update CourseLesson');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CourseLesson $courselesson): bool
    {
        return $user->checkPermissionTo('delete CourseLesson');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any CourseLesson');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CourseLesson $courselesson): bool
    {
        return $user->checkPermissionTo('restore CourseLesson');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any CourseLesson');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, CourseLesson $courselesson): bool
    {
        return $user->checkPermissionTo('replicate CourseLesson');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder CourseLesson');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CourseLesson $courselesson): bool
    {
        return $user->checkPermissionTo('force-delete CourseLesson');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any CourseLesson');
    }
}
