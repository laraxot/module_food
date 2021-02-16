<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\LU\Models\User;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class ProfilePolicy.
 */
class ProfilePolicy extends XotBasePolicy {
    public function create(?UserContract $user, ModelContract $post): bool {
        /*
    	* se ho creato un profilo, non posso crearne un altro
    	*
    	**/
        if (\Auth::check()) {
            return false;
        }

        return true;
    }

    public function store(?UserContract $user, ModelContract $post): bool {
        /*
    	* si deve creare un profilo da non loggato
    	*
    	**/
        return true;
    }

    public function edit(UserContract $user, ModelContract $post): bool {
        return false;
    }

    public function index(?UserContract $user, ModelContract $post): bool {
        /*
    	* non si puo' vedere la lista degli utenti .
    	*
        **/
        return false;
    }

    public function personalInfo(UserContract $user, ModelContract $post): bool {
        return true;
    }

    public function userSecurity(UserContract $user, ModelContract $post): bool {
        return true;
    }
}