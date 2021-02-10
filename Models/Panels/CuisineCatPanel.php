<?php

namespace Modules\Food\Models\Panels;

use Illuminate\Http\Request;
//--- Services --
use Modules\Xot\Models\Panels\XotBasePanel;

//---- bases --

/**
 * Class CuisineCatPanel.
 */
class CuisineCatPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    protected static string $model = 'Modules\Food\Models\CuisineCat';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    protected static string $title = 'title';

    /**
     * @return string
     */
    public function optionLabel(object $row): string {
        return $row->title;
    }

    /**
     * Get the fields displayed by the resource.
     *
     * @return array
     */
    public function fields(): array {
        return [
            (object) ['type' => 'Id',     'name' => 'id'],
            (object) ['type' => 'Text',   'name' => 'post.title'],
            (object) ['type' => 'Text',   'name' => 'post.subtitle'],
            (object) ['type' => 'Text',   'name' => 'note'],
            (object) ['type' => 'Text',   'name' => 'pivot.note'],
        ];
    }

    public static function elaborateRequest(Request $request) {
        if (($request->ajax() && $request->has('query')) || $request->has('debug')) {
            $lang = app()->getLocale();
            $q = $request->input('query');
            /*
            $rows=$query->select('area_id as id','area_define_name as label')
                    ->where('area_define_name','like','%'.$q.'%')
                    ->limit(10)
                        ->get()
                        ->toJson();
            */
            //*
            $rows = \Modules\Blog\Models\Post::select('post_id as id', 'title as label')
                        ->where('title', 'like', '%'.$q.'%')
                        ->where('post_type', 'cuisine_cat')
                        ->where('lang', $lang)
                        ->limit(10)
                        ->get()
                        ->toJson();
            //*/

            die($rows);
        }
    }
}
