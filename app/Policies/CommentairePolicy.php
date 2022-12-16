<?php

namespace App\Policies;

use App\Models\Commentaire;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommentairePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }


  /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Commentaire $commentaire = null)
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Commentaire $commentaire)
    {
        return $user->id === $commentaire->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Commentaire $commentaire)
    {
        return $user->id === $commentaire->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Commentaire $commentaire)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Commentaire  $commentaire
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Commentaire $commentaire)
    {
        //
    }
}
