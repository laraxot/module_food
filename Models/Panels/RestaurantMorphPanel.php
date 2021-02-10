<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class RestaurantMorphPanel
 * @package Modules\Food\Models\Panels
 */
class RestaurantMorphPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\RestaurantMorph';

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
            ],
            (object) [
                'type' => 'SelectTypeahead',
                'name' => 'post_id',
                'attributes' => [
                    'data-url' => url('/admin/food/it/profile?query=%QUERY%'),
                ],
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post_type',
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'restaurant_id',
            ],

            (object) [
                'name' => 'status',
                'rules' => 'required',
            ],
            /*(object) array(
                'type' => 'Text',
                'name' => 'related_type',
            ),
            */
        ];
    }
}
