<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

// --- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

// ------- bases -----

/**
 * Class IngredientPanel.
 */
class IngredientPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\Ingredient';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array {
        return [
            // *
            (object) [
                'type' => 'Id',
                'name' => 'id',
            ],
            // */

            /*
          (object) array(
             'type' => 'string',
             'name' => 'post.lang',
          ),
          */
            (object) [
                'type' => 'string',
                'name' => 'post.title',
            ],
            (object) [
                'type' => 'string',
                'name' => 'post.subtitle',
            ],
            (object) [
                'type' => 'string',
                'name' => 'pivot.price',
            ],
            /*
          (object) array(
             'type' => 'string',
             'name' => 'pivot[pos]',
          ),
          */
        ];
    }
}
