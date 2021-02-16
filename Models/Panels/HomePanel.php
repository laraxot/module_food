<?php

namespace Modules\Food\Models\Panels;

use Illuminate\Http\Request;
//--- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class HomePanel.
 */
class HomePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Food\Models\Home';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @return string[]
     * @return string[]
     *
     * @var array
     */
    public function with(): array {
        return ['widgets'];
    }

    public function search(): array {
        return [];
    }

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'comment' => null,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'article_type',
                'comment' => 'not in Doctrine',
            ],
            (object) [
                'type' => 'String',
                'name' => 'icon_src',
                'comment' => null,
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = ['widget'];

        return $tabs_name;
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(Request $request = null) {
        return [
            new \Modules\Xot\Models\Panels\Actions\ArtisanAction(request()->input('cmd')),
        ];
    }
}