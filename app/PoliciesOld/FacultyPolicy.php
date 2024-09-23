<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Faculty;
use App\Models\User;

class FacultyPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Faculty');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Faculty $faculty): bool
    {
        return $user->checkPermissionTo('view Faculty');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Faculty');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Faculty $faculty): bool
    {
        return $user->checkPermissionTo('update Faculty');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Faculty $faculty): bool
    {
        return $user->checkPermissionTo('delete Faculty');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Faculty');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Faculty $faculty): bool
    {
        return $user->checkPermissionTo('restore Faculty');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Faculty');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Faculty $faculty): bool
    {
        return $user->checkPermissionTo('replicate Faculty');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Faculty');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Faculty $faculty): bool
    {
        return $user->checkPermissionTo('force-delete Faculty');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Faculty');
    }
}
