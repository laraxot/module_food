<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//------- bases -----

/**
 * Class RecipePanel.
 */
class RecipePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\Recipe';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
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