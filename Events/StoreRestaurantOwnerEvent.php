<?php

namespace Modules\Food\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class StoreRestaurantOwnerEvent
 * @package Modules\Food\Events
 */
class StoreRestaurantOwnerEvent {
    use SerializesModels;

    //public $msg;
    /**
     * @var \Modules\LU\Models\User
     */
    public \Modules\LU\Models\User $user;

    /**
     * Create a new event instance.
     *
     * @param \Modules\LU\Models\User $user
     */
    public function __construct($user) {
        $this->user = $user;
        //ddd('qui');//ok
    }
}
