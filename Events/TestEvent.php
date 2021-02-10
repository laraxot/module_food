<?php

namespace Modules\Food\Events;

use Illuminate\Queue\SerializesModels;

/**
 * Class TestEvent
 * @package Modules\Food\Events
 */
class TestEvent {
    use SerializesModels;

    /**
     * Create a new event instance.
     */
    public function __construct() {
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn() {
        return [];
    }
}
