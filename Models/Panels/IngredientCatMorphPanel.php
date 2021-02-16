<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class IngredientCatMorphPanel
 * @package Modules\Food\Models\Panels
 */
class IngredientCatMorphPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\IngredientCatMorph';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
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
                'name' => 'ingredient_cat_id',
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
        ];
    }
}
=======
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class IngredientCatMorphPanel
 * @package Modules\Food\Models\Panels
 */
class IngredientCatMorphPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\IngredientCatMorph';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
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
                'name' => 'ingredient_cat_id',
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
        ];
    }
}
>>>>>>> a6dde0f (first)
