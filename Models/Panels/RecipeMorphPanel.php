<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class RecipeMorphPanel.
 */
class RecipeMorphPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\RecipeMorph';

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
            ],
            (object) [
                //'type' => 'BigInt',
                'type' => 'Integer',
                'name' => 'post_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_type',
            ],
            (object) [
                //'type' => 'BigInt',
                'type' => 'Integer',
                'name' => 'recipe_id',
            ],
            (object) [
                'type' => 'String',
                'name' => 'related_type',
            ],
            /*
          (object) array(
             'type' => 'Integer',
             'name' => 'auth_user_id',
          ),
          */
            (object) [
                'type' => 'Decimal',
                'name' => 'price',
            ],
            (object) [
                'type' => 'String',
                'name' => 'price_currency',
            ],
            (object) [
                //'type' => 'Boolean',
                'type' => 'Integer',
                'name' => 'launch_available',
            ],
            (object) [
                //'type' => 'Boolean',
                'type' => 'Integer',
                'name' => 'dinner_available',
            ],
        ];
    }
}