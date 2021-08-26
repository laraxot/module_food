<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class TipPanel.
 */
class TipPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Food\Models\Tip';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * fields.
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
