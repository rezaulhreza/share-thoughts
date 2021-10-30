<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

      //compare this user id-logged in to the one that the post user id.

       //return true if match,if not false
    public function delete(User $user, Post $post){
        return $user->id === $post->user_id;

    }


}
