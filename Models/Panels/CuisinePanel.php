<?php

namespace Modules\Food\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//------- bases -----

/**
 * Class CuisinePanel.
 */
class CuisinePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\Cuisine';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return string[]
     * @return string[]
     *
     * @var array
     */
    public function with(): array {
        return ['post'];
    }

    /**
     * @return string[]
     */
    public function search(): array {
        return ['post.title', 'post.subtitle'];
    }

    /**
     * on select the option id.
     *
     * @return mixed
     */
    public function optionId(object $row) {
        return $row->area_id;
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return $row->area_define_name;
    }

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
            ],
            /*
            (object) [
                'type' => 'Integer',
                'name' => 'pivot.pos',
            ],
            */
            (object) [
                'type' => 'Text',
                'name' => 'post.subtitle',
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = ['recipe', 'ingredient_cat'];

        return $tabs_name;
    }

    /**
     * Get the cards available for the request.
     *
     * @return array
     */
    public function cards(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\AddRecipeAction(),
        ];
    }
}