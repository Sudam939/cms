<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Attendence;
use App\Models\User;

class AttendencePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any Attendence');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Attendence $attendence): bool
    {
        return $user->checkPermissionTo('view Attendence');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create Attendence');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Attendence $attendence): bool
    {
        return $user->checkPermissionTo('update Attendence');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Attendence $attendence): bool
    {
        return $user->checkPermissionTo('delete Attendence');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any Attendence');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Attendence $attendence): bool
    {
        return $user->checkPermissionTo('restore Attendence');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any Attendence');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, Attendence $attendence): bool
    {
        return $user->checkPermissionTo('replicate Attendence');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder Attendence');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Attendence $attendence): bool
    {
        return $user->checkPermissionTo('force-delete Attendence');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any Attendence');
    }
}
