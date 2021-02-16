<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\Blog\Models\Event as Post;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class EventPolicy.
 */
class EventPolicy extends XotBasePolicy {
    public function create(UserContract $user, ModelContract $post): bool {
        return true;  //se e' loggato puo' creare ristorante non proprietario ristorante
    }
}
=======
<?php

declare(strict_types=1);

namespace Modules\Food\Models\Policies;

//use Modules\Blog\Models\Event as Post;
use Modules\Xot\Contracts\ModelContract;
use Modules\Xot\Contracts\UserContract;
use Modules\Xot\Models\Policies\XotBasePolicy;

/**
 * Class EventPolicy.
 */
class EventPolicy extends XotBasePolicy {
    public function create(UserContract $user, ModelContract $post): bool {
        return true;  //se e' loggato puo' creare ristorante non proprietario ristorante
    }
}
>>>>>>> a6dde0f (first)
