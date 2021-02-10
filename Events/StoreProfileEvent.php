<?php

namespace Modules\Food\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class StoreProfileEvent
 * @package Modules\Food\Events
 */
class StoreProfileEvent {
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
    public function __construct(\Modules\LU\Models\User $user) {
        $this->user = $user;
    }
}
