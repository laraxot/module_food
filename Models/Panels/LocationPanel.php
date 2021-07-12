<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//------- bases -----

/**
 * Class LocationPanel.
 */
class LocationPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\Location';

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
        return [
            'post',
            //    'restaurants',
            'images',
        ];
    }

    /**
     * @return bool
     */
    public function hasLang() {
        return true;
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
            (object) [
                'type' => 'AddressGoogle',
                'name' => 'address',
                'except' => ['index'],
            ],
            (object) [
                'type' => 'image',
                'name' => 'post.image_src',
            ],
            (object) [
                'type' => 'integer',
                'name' => 'restaurants_count',
                'except' => ['edit', 'create'],
            ],
            (object) [
                'type' => 'Wysiwyg',
                'name' => 'post.txt',
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = ['cuisine_cats', 'restaurants'];

        return $tabs_name;
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new Actions\LocationRecountRestaurantsAction(),
        ];
    }

    /**
     * @return mixed
     */
    public static function indexQueryCustom(Request $request, Builder $query) {
        $q = $request->q;
        if (strlen($q) < 3) {
            return $query;
        }

        return $query->whereHas('post', function (Builder $subquery) use ($q) {
            $subquery->where('title', 'like', '%'.$q.'%');
        });
    }
}
