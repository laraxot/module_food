<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class IngredientMorphPanel.
 */
class IngredientMorphPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\IngredientMorph';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'BigInt',
                'name' => 'post_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_type',
                'comment' => null,
            ],
            (object) [
                'type' => 'BigInt',
                'name' => 'ingredient_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'related_type',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'auth_user_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Decimal',
                'name' => 'price',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'price_currency',
                'comment' => null,
            ],
        ];
    }
}