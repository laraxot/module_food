<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

// --- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

// ------- bases -----

/**
 * Class OpeningHourPanel.
 */
class OpeningHourPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\OpeningHour';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array {
        return [
            (object) [
                // 'type' => 'Id',
                'type' => 'Hidden',
                'name' => 'id',
            ],
            (object) [
                // 'type' => 'String',
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
     */
    public function actions(): array {
        return [
            new Actions\EditOpeningHourAction(),
        ];
    }
}
