<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

// --- Services --
use Modules\Blog\Models\Label;
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class BellBoyPanel.
 */
class BellBoyPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\BellBoy';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * @return object[]
     */
    public function fields(): array {
        return [
            (object) [
                'type' => 'Id',
                'name' => 'id',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.first_name',
                'col_bs_size' => 6,
                'rules' => 'required',
            ],
            (object) [
                'type' => 'String',
                'name' => 'user.last_name',
                'col_bs_size' => 6,
                'rules' => 'required',
            ],
            (object) [
                'type' => 'Date',
                'name' => 'birthday',
                'col_bs_size' => 6,
                'rules' => 'required',
            ],
            /*
            (object) [
                'type' => 'Email',
                'name' => 'user.email',
                'col_bs_size' => 6,
            ],
            */
            (object) [
                'type' => 'Integer',
                'name' => 'phone',
                'col_bs_size' => 6,
                'rules' => 'required',
            ],

            (object) [
                // 'type' => 'Select',
                'type' => 'Textarea',
                'name' => 'vehicle_type',
                'col_bs_size' => 6,
                'rules' => 'required',
                'attributes' => ['options' => Label::query()->where('label_type', 'vehicle')->get()->pluck('title', 'label_id'),
                ],
            ],
            /*
            (object) [
                'type' => 'String',
                'name' => 'vehicle_model',
                'col_bs_size' => 6,
            ],
            */
        ];
    }

    /**
     * Get the tabs available.
     */
    public function tabs(): array {
        $tabs_name = ['restaurant', 'cart'];

        return [];
    }

    /**
     * @return string[]
     */
    public function indexEditSubs() {
        return ['carts'];
    }

    /**
     * Get the actions available for the resource.
     */
    public function actions(): array {
        return [
            new \Modules\Rating\Models\Panels\Actions\RateItAction(),
            new \Modules\Food\Models\Panels\Actions\EditBellBoyAction(),
            new \Modules\Food\Models\Panels\Actions\WhereIAmAction(),
            new \Modules\Food\Models\Panels\Actions\StopBeingBellBoyAction(),
            new \Modules\Cart\Models\Panels\Actions\BellBoyTakeCartAction(),
        ];
    }

    /**
     * @return null
     */
    public function avatar() {
        return null;
    }

    /**
     * @return string
     */
    public function swiperItem() {
        return 'pub_theme::bell_boy.swiper.item';
    }
}
