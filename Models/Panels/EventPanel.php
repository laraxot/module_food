<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class EventPanel
 * @package Modules\Food\Models\Panels
 */
class EventPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Food\Models\Event';

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
                'type' => 'DateTime',
                'name' => 'date_start',
                'comment' => null,
            ],
            (object) [
                'type' => 'DateTime',
                'name' => 'date_end',
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
 * Class EventPanel
 * @package Modules\Food\Models\Panels
 */
class EventPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Food\Models\Event';

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
                'type' => 'DateTime',
                'name' => 'date_start',
                'comment' => null,
            ],
            (object) [
                'type' => 'DateTime',
                'name' => 'date_end',
                'comment' => null,
            ],
        ];
    }
}
>>>>>>> a6dde0f (first)
