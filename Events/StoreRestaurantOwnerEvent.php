<?php

declare(strict_types=1);

namespace Modules\Food\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class StoreRestaurantOwnerEvent.
 */
class StoreRestaurantOwnerEvent {
    use SerializesModels;

    // public $msg;

    public \Modules\LU\Models\User $user;

    /**
     * Create a new event instance.
     *
     * @param \Modules\LU\Models\User $user
     */
    public function __construct($user) {
        $this->user = $user;
        // ddd('qui');//ok
    }
}
