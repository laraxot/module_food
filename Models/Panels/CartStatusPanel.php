<?php

namespace Modules\Food\Models\Panels;

//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class CartStatusPanel.
 */
class CartStatusPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Cart\Models\CartStatus';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'String',
                'name' => 'name',
                'rules' => 'required',
                'comment' => null,
            ],
            (object) [
                'type' => 'String',
                'name' => 'color',
                'rules' => 'required',
                'comment' => null,
            ],
        ];
    }
}