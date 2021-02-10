<?php

namespace Modules\Food\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;

/**
 * Class TestPolicy
 * @package Modules\Food\Policies
 */
class TestPolicy {
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     */
    public function __construct() {
    }
}
