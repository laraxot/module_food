<?php

declare(strict_types=1);

namespace Modules\Food\Listeners;

use Modules\Food\Events\TestEvent;

/**
 * Class TestListener.
 */
class TestListener {
    /**
     * Create the event listener.
     */
    public function __construct() {
    }

    /**
     * Handle the event.
     */
    public function handle(TestEvent $event) {
    }
}
