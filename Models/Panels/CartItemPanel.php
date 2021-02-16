<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class CartItemPanel
 * @package Modules\Food\Models\Panels
 */
class CartItemPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Cart\Models\CartItem';

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Integer',
                'name' => 'post_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_type',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'auth_user_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'sess_id',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'pivot_id',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'qty',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'parent_id',
            ],
        ];
    }
}
=======
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class CartItemPanel
 * @package Modules\Food\Models\Panels
 */
class CartItemPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Cart\Models\CartItem';

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Integer',
                'name' => 'post_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_type',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'auth_user_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'sess_id',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'pivot_id',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'qty',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'parent_id',
            ],
        ];
    }
}
>>>>>>> a6dde0f (first)
