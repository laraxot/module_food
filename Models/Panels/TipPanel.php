<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class TipPanel
 * @package Modules\Food\Models\Panels
 */
class TipPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Food\Models\Tip';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * fields.
     *
     * @return array
     */
    public function fields(): array {
        return [
            /*
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            */
            (object) [
                'type' => 'Textarea',
                'name' => 'note',
                'rules' => 'required',
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
 * Class TipPanel
 * @package Modules\Food\Models\Panels
 */
class TipPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static string $model = 'Modules\Food\Models\Tip';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static string $title = 'title';

    /**
     * fields.
     *
     * @return array
     */
    public function fields(): array {
        return [
            /*
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            */
            (object) [
                'type' => 'Textarea',
                'name' => 'note',
                'rules' => 'required',
                'comment' => null,
            ],
        ];
    }
}
>>>>>>> a6dde0f (first)
