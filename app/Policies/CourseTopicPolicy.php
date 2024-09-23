<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\CourseTopic;
use App\Models\User;

class CourseTopicPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any CourseTopic');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, CourseTopic $coursetopic): bool
    {
        return $user->checkPermissionTo('view CourseTopic');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create CourseTopic');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, CourseTopic $coursetopic): bool
    {
        return $user->checkPermissionTo('update CourseTopic');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, CourseTopic $coursetopic): bool
    {
        return $user->checkPermissionTo('delete CourseTopic');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any CourseTopic');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, CourseTopic $coursetopic): bool
    {
        return $user->checkPermissionTo('restore CourseTopic');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any CourseTopic');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, CourseTopic $coursetopic): bool
    {
        return $user->checkPermissionTo('replicate CourseTopic');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder CourseTopic');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, CourseTopic $coursetopic): bool
    {
        return $user->checkPermissionTo('force-delete CourseTopic');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any CourseTopic');
    }
}
