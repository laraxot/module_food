<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class ProfilePrivacyPanel
 * @package Modules\Food\Models\Panels
 */
class ProfilePrivacyPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\ProfilePrivacy';

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
                'type' => 'Integer',
                'name' => 'auth_user_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Integer',
                'name' => 'flag_id',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'flag_value',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'field_description',
                'rules' => 'required',
                'comment' => null,
            ],
        ];
    }
}
