<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class WaiterPanel.
 */
class WaiterPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Food\Models\Waiter';

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
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'phone',
                'comment' => null,
            ],

            (object) [
                'type' => 'String',
                'name' => 'email',
                'comment' => null,
                'rules' => 'required|exists:liveuser_general.liveuser_user',
            ],

            (object) [
                'type' => 'Integer',
                'name' => 'auth_user_id',
                'comment' => null,
            ],
        ];
    }
}