<?php
namespace Modules\Food\Models\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Modules\Food\Models\BellBoy as Post;
use Modules\LU\Models\User;

use Modules\Xot\Traits\XotBasePolicyTrait;

class CartPolicy
{
    //use HandlesAuthorization;
     use XotBasePolicyTrait;

    public function before($user, $ability)
    {
        if (is_object($user->perm) && $user->perm->perm_type >= 5) {  //superadmin
            return true;
        }
       
    }

    public function create(User $user, Post $post)
    {
        return true;  //se e' loggato puo' creare ristorante non proprietario ristorante
    }


}