<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

// --- Services --

use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class PhotoPanel.
 */
class PhotoPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    public static string $model = 'Modules\Food\Models\Photo';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    public static string $title = 'title';

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
                'name' => 'post.title',
                'col_bs_size' => 12,
                // 'except' => ['index'],
            ],

            (object) [
                'type' => 'Text',
                'name' => 'post.image_title',
                'col_bs_size' => 12,
                // 'except' => ['index'],
            ],

            (object) [
                'type' => 'Text',
                'name' => 'post.image_alt',
                'col_bs_size' => 12,
                // 'except' => ['index'],
            ],

            (object) [
                // 'type' => 'UnisharpImg', //'Html5UploadImg',
                'type' => 'Image',
                'name' => 'post.image_src',
                'col_bs_size' => 12,
                // 'except' => ['index'],
            ],
        ];
    }
}
