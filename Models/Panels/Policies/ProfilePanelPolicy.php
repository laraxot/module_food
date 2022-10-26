<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Policies;

// use Modules\LU\Models\User;
use Modules\Xot\Contracts\PanelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Panels\Policies\XotBasePanelPolicy;

/**
 * Class ProfilePanelPolicy.
 */
class ProfilePanelPolicy extends XotBasePanelPolicy {
    public function create(?UserContract $user, PanelContract $panel): bool {
        /*
    	* se ho creato un profilo, non posso crearne un altro
    	*
    	**/
        if (\Auth::check()) {
            return false;
        }

        return true;
    }

    public function store(?UserContract $user, PanelContract $panel): bool {
        /*
    	* si deve creare un profilo da non loggato
    	*
    	**/
        return true;
    }

    public function edit(UserContract $user, PanelContract $panel): bool {
        return false;
    }

    public function index(?UserContract $user, PanelContract $panel): bool {
        /*
    	* non si puo' vedere la lista degli utenti .
    	*
        **/
        return false;
    }

    public function personalInfo(UserContract $user, PanelContract $panel): bool {
        // volevo riutilizzare edit invece di copiare tutto lo snippet

        $post = $panel->getRow();
        if ($post->created_by == $user->handle || $post->updated_by == $user->handle || $post->user_id == $user->user_id) {
            return true;
        }

        return false;
    }

    public function userSecurity(UserContract $user, PanelContract $panel): bool {
        // return true;
        // volevo riutilizzare edit invece di copiare tutto lo snippet
        $post = $panel->getRow();
        if ($post->created_by == $user->handle || $post->updated_by == $user->handle || $post->user_id == $user->user_id) {
            return true;
        }

        return false;
    }
}
