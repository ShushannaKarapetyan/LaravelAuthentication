<?php

namespace App\Policies;

use App\Conversation;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ConversationPolicy
{
    use HandlesAuthorization;

    public function before(User $user){ //if we have this before function(hook), we never move on to next step
        /*if($user->id === 5){  // this user can have permission too, for all replies.
            return true;
        }*/

        #it's the same

       // return $user->id === 5;
    }


    public function view(User $user, Conversation $conversation){

        return $conversation->user->is($user);

    }

    public function update(User $user, Conversation $conversation){

        return $conversation->user->is($user);

    }


}
