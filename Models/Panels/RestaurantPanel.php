<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

//--- Services --
use Illuminate\Support\Facades\Auth;
//--- Models ---
use Modules\Blog\Models\Post;
use Modules\Food\Models\Profile;
use Modules\Food\Models\Restaurant;
use Modules\Food\Rules\TitleSlugUnique;
use Modules\Xot\Models\Panels\XotBasePanel;

/**
 * Class RestaurantPanel.
 */
class RestaurantPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\Restaurant';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    protected static array $search = [];

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
            'ratings',
            'images',
            'cuisineCats',
            'cuisineCats.post',
        ];
    }

    /**
     * @return string[]
     */
    public function search(): array {
        return ['post.title', 'post.subtitle', 'locality'];
    }

    /**
     * @return string[]
     */
    public function orderBy() {
        return [
            'distance|asc',
            'ratings_avg|desc',
            'ratings_count|desc',
            'updated_at|desc',
        ];
    }

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array {
        //$auth_user_id = \Auth::check() ? \Auth::user()->auth_user_id : '';
        $auth_user_id = \Auth::id(); //da valutare
        $post_table = with(new Post())->getTable();
        $restaurant_table = with(new Restaurant())->getTable();
        //$ignore_id=null;
        //$ignore_id = $this->row->post_id;

        return [
            (object) [
                'type' => 'Text',
                'name' => 'post.title',
                //'rules' => 'required|min:3|max:50|unique:'.$post_table.',title',
                //  -> esempio con un id da escludere al controllo 'email' => ['email', Rule::unique('users', 'email')->ignore(1)]
                'rules' => ['required', 'min:3', 'max:50', new TitleSlugUnique('restaurant')],
                'except' => ['rate', 'index_edit'],
            ],
            (object) [
                'type' => 'SelectRelationshipMulti',
                'name' => 'cuisineCats',
            ],

            (object) [
                'type' => 'Textarea',
                'name' => 'post.subtitle',
                //'rules' => 'max:90', //siamo noi a tagliare
                'except' => ['index_edit'],
            ],
            (object) [
                //'type' => 'UnisharpImg', //'Html5UploadImg',
                'type' => 'Image',
                'name' => 'post.image_src',
                'col_bs_size' => 12,
                'except' => ['index', 'index_edit'],
            ],
            (object) [
                'type' => 'Text',
                'name' => 'website',
                'except' => ['index'],
            ],
            (object) [
                'type' => 'Text',
                'name' => 'email',
                'col_bs_size' => 6,
                //'rules' => 'required|email|unique:'.$restaurant_table.',email',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'phone',
                'col_bs_size' => 6,
                'rules' => 'numeric',
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'post.txt',
                'except' => ['index', 'index_edit'],
                'rules' => 'max:300',
            ],
            (object) [
                'type' => 'Address',
                'sub_type' => 'Google',
                'name' => 'address',
                'except' => ['index_edit'],
                //'rules' => 'required',
            ],
            (object) [
                //'type' => 'PrvCheckbox',
                'type' => 'Accept',
                'name' => 'restaurant_accept_rules',
                'except' => ['index', 'edit', 'index_edit'],
                'text' => trans('pub_theme::restaurant.rules_txt'),
                // 'rules' => 'pivot_rules',
            ],
            (object) [
                'type' => 'Hidden',
                'name' => 'profiles.auth_user_id',
                'value' => $auth_user_id,
                'except' => ['index', 'index_edit'],
            ],

            /*
            (object) [
                'type' => 'SwiperRelationship',
                'name' => 'carts',
                //'except' => ['index'],
            ],
            (object) [
                'type' => 'PivotRatings',
                'name' => 'ratings',
                //'value' => $auth_user_id,
                //'except'=>['index'],
            ],
            (object) [
                'type' => 'PivotRatingsAvg',
                'name' => 'ratings',
                //'value' => $auth_user_id,
                //'except'=>['index'],
            ],
            (object) [
                'type' => 'PivotRatings',
                'name' => 'my_ratings',
                //'value' => $auth_user_id,
                //'except'=>['index'],
            ],
            //*/
            /*
            (object) [
                'type' => 'Rating',
                'name' => 'myRatings',
                'except' => ['index'],
                'col_bs_size' => 12,
            ],
            (object) [
                'type' => 'Rating',
                'name' => 'ratings',
                'except' => ['edit', 'create'],
                'col_bs_size' => 12,
            ],
            */
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs(): array {
        if (in_admin()) {
            $tabs_name = ['cuisines', 'cuisine_cats', 'locations', 'opening_hours', 'articles', 'photos', 'events',
                'profiles', 'ratings', 'my_ratings', 'bookings', 'booking_items', ];
        } else {
            $tabs_name = ['cuisines', 'articles'];
        }

        return $tabs_name;
    }

    /**
     * @return string[]
     */
    public function indexEditSubs() {
        return ['carts', 'bellBoys'];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(): array {
        return [
            new \Modules\Rating\Models\Panels\Actions\RateItAction(),
            new \Modules\Geo\Models\Panels\Actions\MakeGeoJsonFileAction(),
            new Actions\EditRestaurantBasicAction(),
            new Actions\EditRestaurantTxtAction(),
            new Actions\EditRestaurantMapAction(),
            new Actions\EditRestaurantPhotoAction(),
            new Actions\EditRestaurantOpeningHoursAction(),
            new Actions\EditRestaurantContactAction(),
            new Actions\QrcodePdfAction(),
            new Actions\RestaurantPdfAction(),
            new Actions\RestaurantClaimsAction(),
            new Actions\NoClaimsRestaurantAction(),
            new Actions\ToggleCheckoutAction(),
            new Actions\ToggleReservationTableAction(),
            new Actions\CartAddedByRestaurantOwnerAction(),
            new Actions\AddItemCartByRestaurantOwnerAction(),
            new Actions\CreateBookTableAction(),

            new Actions\CheckOutAction(),

            //----------------------------------------------------
            new Actions\AttachBellBoyAction(Auth::id()),
            new Actions\DetachBellBoyAction(Auth::id()),
            new Actions\AttachWaiterAction(),
            new Actions\AttachBellBoyByRestaurantOwnerAction(),
        ];
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createSpecialCase() {
        $params = [];
        $params['lang'] = app()->getLocale();
        $params['container0'] = 'restaurant_owner';

        return redirect()->route('container0.create', $params);
    }

    public function storeCallback(array $params): object {
        extract($params);
        if (! isset($row)) {
            dddx(['err' => 'row not set']);

            return (object) [];
        }
        /*
        $profile = Auth::user()->profile;
        */
        $profile = Profile::query()->where('auth_user_id', Auth::id())->first();

        $profile->restaurants()->save($row, ['auth_user_id' => \Auth::id()]);

        return $row;
    }
}
