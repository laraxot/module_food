<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class ProfilePrivacyChronoPanel
 * @package Modules\Food\Models\Panels
 */
class ProfilePrivacyChronoPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\ProfilePrivacyChrono';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    protected static array $search = [
    ];

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return array

     * @var array
     */
    public function with():array {
        return [];
    }

    /**
     * @return array
     */
    public function search() :array {

        return [];
    }

    /**
     * on select the option id.
     * @param object $row
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    /**
     * on select the option label.
     * @param object $row
     * @return string
     */
    public function optionLabel(object $row):string {
        return $row->area_define_name;
    }

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
                'name' => 'checkbox_position',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'checkbox_value',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'checkbox_label',
                'comment' => null,
            ],
        ];
    }
}
