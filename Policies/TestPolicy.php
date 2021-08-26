<?php

declare(strict_types=1);

namespace Modules\Food\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class TestPolicy.
 */
class TestPolicy {
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct() {
    }
}
