<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class AmenityPanel
 * @package Modules\Food\Models\Panels
 */
class AmenityPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Blog\Models\Amenity';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'related_type',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.subtitle',
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
 * Class AmenityPanel
 * @package Modules\Food\Models\Panels
 */
class AmenityPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Blog\Models\Amenity';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'related_type',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.subtitle',
                'comment' => null,
            ],
        ];
    }
}
>>>>>>> a6dde0f (first)
