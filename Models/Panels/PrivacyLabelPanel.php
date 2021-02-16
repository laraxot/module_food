<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class PrivacyLabelPanel.
 */
class PrivacyLabelPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\PrivacyLabel';

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
                'type' => 'String',
                'name' => 'checkbox_label',
                'comment' => null,
            ],
        ];
    }
}