<?php

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class AmenityPanel.
 */
class AmenityPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
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