<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

// --- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class CuisineCatMorphPanel.
 */
class CuisineCatMorphPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\CuisineCatMorph';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array {
        // 'type' => 'BigInt',
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
            ], // diventa la chiave
            (object) [
                'type' => 'Integer',
                'name' => 'post_id',
            ], // viene tolto perche' getForeignPivotKeyName
            (object) [
                'type' => 'String',
                'name' => 'post_type',
            ], // viene tolto perche' getMorphType
            (object) [
                'type' => 'SelectTypeahead',
                'name' => 'cuisine_cat_id',
                'rules' => 'required',
                'attributes' => [
                    'data-url' => url('/admin/food/it/cuisine_cat?query=%QUERY%'),
                ],
            ],
            // (object) ['type' => 'String',	    		'name' => 'related_type',   ], //diventa inutile perche' sempre settato a "cuisine_cat"
            (object) ['type' => 'Text',    				'name' => 'pivot.note',
                'rules' => 'required', ], // test di salvataggio
        ];
    }
}
