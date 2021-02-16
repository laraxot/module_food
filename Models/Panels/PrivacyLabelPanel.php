<<<<<<< HEAD
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class PrivacyLabelPanel
 * @package Modules\Food\Models\Panels
 */
class PrivacyLabelPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\PrivacyLabel';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
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
=======
<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class PrivacyLabelPanel
 * @package Modules\Food\Models\Panels
 */
class PrivacyLabelPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\PrivacyLabel';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
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
>>>>>>> a6dde0f (first)
