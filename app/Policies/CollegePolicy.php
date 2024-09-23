<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\College;
use App\Models\User;

class CollegePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any College');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, College $college): bool
    {
        return $user->checkPermissionTo('view College');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create College');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, College $college): bool
    {
        return $user->checkPermissionTo('update College');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, College $college): bool
    {
        return $user->checkPermissionTo('delete College');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any College');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, College $college): bool
    {
        return $user->checkPermissionTo('restore College');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any College');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, College $college): bool
    {
        return $user->checkPermissionTo('replicate College');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder College');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, College $college): bool
    {
        return $user->checkPermissionTo('force-delete College');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any College');
    }
}
