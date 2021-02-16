<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class RestaurantProviderPanel.
 */
class RestaurantProviderPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Food\Models\RestaurantProvider';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                //'type' => 'Id',
                'type' => 'Hidden',
                'name' => 'id',
                'comment' => null, //la sua chiave
            ],
            (object) [
                //'type' => 'Integer',
                'type' => 'Hidden',
                'name' => 'restaurant_id',
                'comment' => null, // la chiave esterna al ristorante
            ],

            (object) [
                'type' => 'String',
                'name' => 'provider',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'url',
                'comment' => null,
            ],
        ];
    }
}