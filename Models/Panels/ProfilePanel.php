<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

use Illuminate\Support\Str;
//--- Services --
use Modules\Food\Events\StoreProfileEvent;
/*
*	tutto cio' che inizia con XotBase e' un abstract Class
*    XotBasePanel e' un abstract
*	 XotPanel elemento riflesso
**/
//---- models ---
use Modules\LU\Models\User;
use Modules\Xot\Models\Panels\XotBasePanel;

//------------ Events  --------------

/**
 * Class ProfilePanel.
 */
class ProfilePanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\Profile';

    /**
     * The single value that should be used to represent the resource when being displayed.
     */
    protected static string $title = 'title';

    /**
     * The columns that should be searched.
     */
    protected static array $search = [];

    /**
     * @return string[]
     */
    public function search(): array {
        return [
            'post_id',
            //'post.title',
            //'post.guid',
        ];
    }

    /**
     * The relationships that should be eager loaded on index queries.
     *
     * @var array
     */
    public function with(): array {
        return [];
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
                'name' => 'user.first_name',
                'col_bs_size' => 6,
                'sortable' => 1,
                //'rules' => 'required',
                // 'rules_messages' => ['it' => ['required' => 'Nome Obbligatorio']],
            ],
            (object) [
                'type' => 'Text',
                'name' => 'user.last_name',
                'col_bs_size' => 6,
            ],
            (object) [
                'type' => 'Text',
                'name' => 'user.email',
                'rules' => 'required|unique:liveuser_general.liveuser_users,email',
                'col_bs_size' => 6,
            ],
            /* -- telefono nella creazione profilo potrebbe dare fastidio
            */
            (object) [
                'type' => 'Integer',
                'name' => 'phone',
                'col_bs_size' => 6,
                'rules' => 'integer',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'bio',
                'col_bs_size' => 6,
                'rules' => 'max:200',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'user.handle',
                //'rules' => 'required',
                'col_bs_size' => 6,
                'rules' => 'required|unique:liveuser_general.liveuser_users,handle',
                'except' => ['edit', 'update'], /*questo deve influire anche sulla rules si sputtanano gli url se si lascia modificare*/
            ],
            (object) [
                'type' => 'Password',
                'sub_type' => 'with_confirm',
                'name' => 'user.passwd',
                'rules' => 'required|confirmed|min:6',
                'col_bs_size' => 12,
                'except' => ['index', 'edit'], //meglio fare una "cambia password a parte"
            ], /*
            (object) [
                'type' => 'Password',
                'name' => 'user.passwd_confirmation',
                'col_bs_size' => 6,
            ],*/
            (object) [
                'type' => 'Image',
                'name' => 'post.image_src',
                'col_bs_size' => 12,
                //'except' => ['index'],
            ],

            (object) [
                'type' => 'Textarea',
                'name' => 'post.txt',
                'col_bs_size' => 12,
                'except' => ['index'],
            ],
            (object) [
                'type' => 'PivotFields', //-- da aggiornare
                'name' => Str::plural('privacy'),
                'col_bs_size' => 12,
                'rules' => 'pivot_rules',
                'except' => ['index'],
            ],
        ];
    }

    /**
     * Get the tabs available.
     *
     * @return array
     */
    public function tabs() {
        $tabs_name = ['restaurant'];

        return $tabs_name;
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions() {
        return [
            new \Modules\Blog\Models\Panels\Actions\PersonalInfoAction(),
            new \Modules\Blog\Models\Panels\Actions\UserSecurityAction(),
        ];
    }

    public function storeCallback(array $params): object {
        extract($params);
        /*
        * metto apposto il titolo della pagina del profilo
        *
        **/
        if (! isset($row)) {
            dddx(['err' => 'row is missing']);

            return (object) [];
        }
        $user = $row->user;

        $post_data = [
            'title' => $row->user->handle,
            'guid' => Str::slug($row->user->handle),
            'auth_user_id' => $user->auth_user_id,
            'lang' => app()->getLocale(),
        ];

        if (is_object($row->post)) {
            $row->post->update($post_data);
        } else {
            $row->post()->create($post_data);
        }

        $res = event(new StoreProfileEvent($user));
        //$this->generateUUIDVerificationToken($user);
        \Auth::guard()->login($user, true);
        //$this->guard()->login($user); ???
        \Session::flash('swal', [
            'type' => 'success',
            'title' => trans('food::profile.store_success.title'),
            'text' => trans('food::profile.store_success.text'),
            'footer' => trans('food::profile.store_success.footer'),
        ]);
        //ddd($user);ddd($row);
        return $row;
    }

    /**
     * @param int $size
     *
     * @return string|null
     */
    public function avatar($size = 100) {
        $user = $this->row->user;
        if (! is_object($user)) {
            if (isset($this->row->auth_user_id) && method_exists($this->row, 'user')) {
                $this->row->user()->create();
            }
            //dddx($this->row);
            return null;
        }
        $email = \md5(\mb_strtolower(\trim($user->email)));
        $default = \urlencode('https://tracker.moodle.org/secure/attachment/30912/f3.png');

        return "https://www.gravatar.com/avatar/$email?d=$default&s=$size";
    }
}
