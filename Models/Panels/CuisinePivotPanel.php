<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

// --- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class CuisinePivotPanel.
 */
class CuisinePivotPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\CuisinePivot';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Text',
                'name' => 'post_id',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'note',
                'comment' => 'not in Doctrine',
            ],
        ];
    }
}
