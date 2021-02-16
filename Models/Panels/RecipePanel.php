<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//------- bases -----

/**
 * Class RecipePanel
 * @package Modules\Food\Models\Panels
 */
class RecipePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\Recipe';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.subtitle',
                'col_bs_size' => 12,
            ],
            (object) [
                //'type' => 'Text', //sarebbe meglio "Price" ?
                'type' => 'Price',
                'name' => 'pivot.price',
                'col_bs_size' => 12,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\AddItemCartAction(),
        ];
    }
}
=======
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//------- bases -----

/**
 * Class RecipePanel
 * @package Modules\Food\Models\Panels
 */
class RecipePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\Recipe';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.subtitle',
                'col_bs_size' => 12,
            ],
            (object) [
                //'type' => 'Text', //sarebbe meglio "Price" ?
                'type' => 'Price',
                'name' => 'pivot.price',
                'col_bs_size' => 12,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\AddItemCartAction(),
        ];
    }
}
>>>>>>> a6dde0f (first)
