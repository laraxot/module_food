<?php

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class PlacePanel
 * @package Modules\Food\Models\Panels
 */
class PlacePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Food\Models\Place';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static string $title = 'title';

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
                'type' => 'String',
                'name' => 'premise',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'locality',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'postal_town',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'administrative_area_level_3',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'administrative_area_level_2',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'administrative_area_level_1',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'country',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'street_number',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'route',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'postal_code',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'googleplace_url',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'point_of_interest',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'political',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'campground',
                'comment' => null,
            ],
            (object) [
                'type' => 'Decimal',
                'name' => 'latitude',
                'comment' => null,
            ],
            (object) [
                'type' => 'Decimal',
                'name' => 'longitude',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'formatted_address',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'nearest_street',
                'comment' => null,
            ],
        ];
    }
}
