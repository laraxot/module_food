<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//------- bases -----

/**
 * Class OpeningHourPanel
 * @package Modules\Food\Models\Panels
 */
class OpeningHourPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\OpeningHour';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                //'type' => 'Id',
                'type' => 'Hidden',
                'name' => 'id',
            ],
            (object) [
                //'type' => 'String',
                'type' => 'Hidden',
                'name' => 'post_type',
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_id',
                'except' => ['edit'],
            ],
            /*
          (object) [
             'type' => 'String',
             'name' => 'day_name',
          ],
          */
            (object) [
                /* vecchia versione di richiamo component????
                'type' => 'Select',
                'sub_type' => 'DayOfWeek',
                */
                'type' => 'SelectDayOfWeek',
                'name' => 'day_of_week',
                'col_bs_size' => 4,
                'rules' => 'required',
            ],
            (object) [
                'type' => 'Time',
                'name' => 'open_at',
                'col_bs_size' => 4,
                'group_class' => 'to_hide',
            ],
            (object) [
                'type' => 'Time',
                'name' => 'close_at',
                'col_bs_size' => 4,
                'group_class' => 'to_hide',
            ],

            (object) [
                'type' => 'CheckboxAndHide',
                'name' => 'is_closed',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'note',
                'col_bs_size' => 12,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\EditOpeningHourAction(),
        ];
    }
}
=======
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//------- bases -----

/**
 * Class OpeningHourPanel
 * @package Modules\Food\Models\Panels
 */
class OpeningHourPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\OpeningHour';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) [
                //'type' => 'Id',
                'type' => 'Hidden',
                'name' => 'id',
            ],
            (object) [
                //'type' => 'String',
                'type' => 'Hidden',
                'name' => 'post_type',
            ],
            (object) [
                'type' => 'String',
                'name' => 'post_id',
                'except' => ['edit'],
            ],
            /*
          (object) [
             'type' => 'String',
             'name' => 'day_name',
          ],
          */
            (object) [
                /* vecchia versione di richiamo component????
                'type' => 'Select',
                'sub_type' => 'DayOfWeek',
                */
                'type' => 'SelectDayOfWeek',
                'name' => 'day_of_week',
                'col_bs_size' => 4,
                'rules' => 'required',
            ],
            (object) [
                'type' => 'Time',
                'name' => 'open_at',
                'col_bs_size' => 4,
                'group_class' => 'to_hide',
            ],
            (object) [
                'type' => 'Time',
                'name' => 'close_at',
                'col_bs_size' => 4,
                'group_class' => 'to_hide',
            ],

            (object) [
                'type' => 'CheckboxAndHide',
                'name' => 'is_closed',
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'note',
                'col_bs_size' => 12,
            ],
        ];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\EditOpeningHourAction(),
        ];
    }
}
>>>>>>> a6dde0f (first)
