<?php

declare(strict_types=1);

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
     */
    protected static string $model = 'Modules\Food\Models\CuisineCat';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    public function optionLabel(object $row): string {
        return (string) $row->title;
    }

    /**
     * Get the fields displayed by the resource.
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

    public static function elaborateRequest(Request $request): void {
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

            exit($rows);
        }
    }
}
