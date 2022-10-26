<?php

declare(strict_types=1);

namespace Modules\Food\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class StoreProfileEvent.
 */
class StoreProfileEvent {
    use SerializesModels;

    // public $msg;

    public \Modules\LU\Models\User $user;

    /**
     * Create a new event instance.
     */
    public function __construct(\Modules\LU\Models\User $user) {
        $this->user = $user;
    }
}
