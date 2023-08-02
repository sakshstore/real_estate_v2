<?php

namespace App\Policies;

use App\Models\User;
use App\Models\faq;
use Illuminate\Auth\Access\HandlesAuthorization;

class FaqPolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, faq $faq)
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
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, faq $faq)
    {
          if(  $user->id === $ticket->user_id )
         return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, faq $faq)
    {
          if(  $user->id === $ticket->user_id )
         return true;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, faq $faq)
    {
        if(  $user->id === $ticket->user_id )
         return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\faq  $faq
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, faq $faq)
    {
          if(  $user->id === $ticket->user_id )
         return true;
    }
    
       
    
    public function before(User $user, $ability)
 {
   if( $user->hasRole('admin') )
          return true;
 }
 
}
