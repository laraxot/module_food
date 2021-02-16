<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Illuminate\Support\Facades\Gate;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

//use Modules\Xot\Services\PanelService;

/**
 * Class BaseRestaurantPolicy.
 */
abstract class BaseRestaurantPolicy extends XotBasePolicy {
    public function create(UserContract $user, ModelContract $post): bool {
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        $res = Gate::forUser($user)->allows('edit', $restaurant);

        return $res;
    }

    public function store(UserContract $user, ModelContract $post): bool {
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        $res = Gate::forUser($user)->allows('edit', $restaurant);

        return $res;
    }

    public function edit(UserContract $user, ModelContract $post): bool {
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');

        return Gate::forUser($user)->allows('edit', $restaurant);
        /*
        if ($post->created_by == $user->handle || $post->updated_by == $user->handle || $post->auth_user_id == $user->auth_user_id) {
            return true;
        }

        return false;
        */
    }

    public function indexEdit(UserContract $user, ModelContract $post): bool {
        //[$containers,$items] = params2ContainerItem();
        //$restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        //dddx(PanelService::getRequestPanel());

        //return Gate::forUser($user)->allows('edit', $restaurant);
        return false;
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

use Illuminate\Support\Facades\Gate;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

//use Modules\Xot\Services\PanelService;

/**
 * Class BaseRestaurantPolicy.
 */
abstract class BaseRestaurantPolicy extends XotBasePolicy {
    public function create(UserContract $user, ModelContract $post): bool {
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        $res = Gate::forUser($user)->allows('edit', $restaurant);

        return $res;
    }

    public function store(UserContract $user, ModelContract $post): bool {
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        $res = Gate::forUser($user)->allows('edit', $restaurant);

        return $res;
    }

    public function edit(UserContract $user, ModelContract $post): bool {
        [$containers,$items] = params2ContainerItem();
        $restaurant = collect($items)->firstWhere('post_type', 'restaurant');

        return Gate::forUser($user)->allows('edit', $restaurant);
        /*
        if ($post->created_by == $user->handle || $post->updated_by == $user->handle || $post->auth_user_id == $user->auth_user_id) {
            return true;
        }

        return false;
        */
    }

    public function indexEdit(UserContract $user, ModelContract $post): bool {
        //[$containers,$items] = params2ContainerItem();
        //$restaurant = collect($items)->firstWhere('post_type', 'restaurant');
        //dddx(PanelService::getRequestPanel());

        //return Gate::forUser($user)->allows('edit', $restaurant);
        return false;
    }
}
>>>>>>> a6dde0f (first)
