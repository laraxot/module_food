<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//--- Services --
use Illuminate\Support\Facades\Session;
//-- bases --
use Illuminate\Support\Str;
//---- models ---
use Modules\Food\Events\StoreRestaurantOwnerEvent;
use Modules\LU\Models\PermUser;
use Modules\LU\Models\User;
use Modules\Xot\Models\Panels\XotBasePanel;

//------------ Events  --------------

/**
 * Class RestaurantOwnerPanel.
 */
class RestaurantOwnerPanel extends XotBasePanel {
    /**
     * The model the resource corresponds to.
     */
    protected static string $model = 'Modules\Food\Models\RestaurantOwner';

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
     * @var array
     */
    public function with(): array {
        return [];
    }

    /**
     * on select the option label.
     */
    public function optionLabel(object $row): string {
        return 'test';
    }

    /**
     * Get the fields displayed by the resource.
     */
    public function fields(): array { // da rivedere per il pannello amministrazione
        /*
        hideFromIndex
        hideFromDetail
        hideWhenCreating
        hideWhenUpdating
        onlyOnIndex
        onlyOnDetail
        onlyOnForms
        exceptOnForms

        ->rules('required', 'email', 'max:255')
    ->creationRules('unique:users,email')
    ->updateRules('unique:users,email,{{resourceId}}'),

        */
        return [
            (object) [
                'type' => 'Text',
                'name' => 'first_name',
                'col_bs_size' => 6,
                'sortable' => 1,
                //'rules' => 'required|min:3|max:30',
                'rules_messages' => [
                    'it' => ['required' => 'Nome Obbligatorio',
                        'min' => 'Inserire min 3 caratteri',
                        'max' => 'Inserire max 30 caratteri',
                    ],
                    'es' => ['required' => 'Name Required',
                        'min' => 'Enter at least 3 characters',
                        'max' => 'Enter up to 30 characters',
                    ],
                    'fr' => ['required' => 'Nom Obligatoire',
                        'min' => 'Entrez au moins 3 caractères',
                        'max' => 'Entrez jusqu\'à 30 caractères',
                    ],
                ],
            ],
            (object) [
                'type' => 'Text',
                'name' => 'last_name',
                'col_bs_size' => 6,
                //'rules' => 'required|min:3|max:30',
                // 'rules_messages' => [
                // 	'it'=>['required'=>'Nome Obbligatorio',
                // 				'min' => 'Inserire min 3 caratteri',
                // 				'max' => 'Inserire max 30 caratteri'
                // 				],
                // 	'es'=>['required'=>'Name Required',
                // 				'min' => 'Enter at least 3 characters',
                // 				'max' => 'Enter up to 30 characters'
                // 				],
                // 	'fr'=>['required'=>'Nom Obligatoire',
                // 				'min' => 'Entrez au moins 3 caractères',
                // 				'max' => 'Entrez jusqu\'à 30 caractères'
                // 				]
                // 	],
            ],
            (object) [
                'type' => 'Text',
                'name' => 'email',
                'col_bs_size' => 6,
                'rules' => 'required|email|unique:liveuser_general.liveuser_users,email',
                'rules_messages' => [
                    'it' => ['required' => 'Inserire una email valida', 'email' => 'Inserire una email valida', 'unique' => 'Email già in uso'],
                    'es' => ['required' => 'Enter a valid email address', 'email' => 'Enter a valid email address', 'unique' => 'Email already in use'],
                    'fr' => ['required' => 'Entrez une adresse email valide', 'email' => 'Entrez une adresse email valide', 'unique' => 'Email déjà utilisé'],
                ],
            ],
            (object) [
                'type' => 'Text',
                'name' => 'phone',
                'col_bs_size' => 6,
                'rules' => 'numeric',
            ],
            (object) [
                'type' => 'Text',
                'name' => 'handle',
                'col_bs_size' => 12,
                'rules' => 'required|min:3|max:30|unique:liveuser_general.liveuser_users,handle',
            ],
            (object) [
                'type' => 'Password',
                'name' => 'passwd',
                'col_bs_size' => 6,
                'rules' => 'required|min:3|max:12|alpha-num|confirmed',
                'rules_messages' => [
                    'it' => [
                        'required' => 'Password Obbligatoria',
                        'min' => 'Inserire min 3 caratteri',
                        'max' => 'Inserire max 12 caratteri',
                        'alpha-num' => 'Inserire solo caratteri o lettere',
                        'confirmed' => 'La password non corrisponde',
                    ],
                    'es' => [
                        'required' => 'Password Required',
                        'min' => 'Enter at least 3 characters',
                        'max' => 'Enter up to 12 characters',
                        'alpha-num' => 'Enter only characters or letters',
                        'confirmed' => 'Password does not match',
                    ],
                    'fr' => [
                        'required' => 'Mot de passe requis',
                        'min' => 'Entrez au moins 3 caractères',
                        'max' => 'Entrez jusqu\'à 12 caractères',
                        'alpha-num' => 'Entrez uniquement des caractères ou des lettres',
                        'confirmed' => 'Le mot de passe ne correspond pas',
                    ],
                ],
            ],
            (object) [
                'type' => 'Password',
                'name' => 'passwd_confirmation',
                'col_bs_size' => 6,
                'rules' => 'required|min:3|max:12',
                'rules_messages' => [
                    'it' => [
                        'required' => 'Password Obbligatoria',
                        'min' => 'Inserire min 3 caratteri',
                        'max' => 'Inserire max 12 caratteri',
                        'alpha-num' => 'Inserire solo caratteri o lettere',
                    ],
                    'es' => [
                        'required' => 'Password Required',
                        'min' => 'Enter at least 3 characters',
                        'max' => 'Enter up to 12 characters',
                        'alpha-num' => 'Enter only characters or letters',
                    ],
                    'fr' => [
                        'required' => 'Mot de passe requis',
                        'min' => 'Entrez au moins 3 caractères',
                        'max' => 'Entrez jusqu\'à 12 caractères',
                        'alpha-num' => 'Entrez uniquement des caractères ou des lettres',
                    ],
                ],
            ],
            (object) [
                'type' => 'Textarea',
                'name' => 'bio',
                'col_bs_size' => 12,
                'rules' => 'max:300',
                'rules_messages' => [
                    'it' => [
                        'max' => 'Inserire max 300 caratteri',
                    ],
                    'es' => [
                        'max' => 'Enter up to 300 characters',
                    ],
                    'fr' => [
                        'max' => 'Entrez jusqu\'à 300 caractères',
                    ],
                ],
            ],
            /*
        	(object)[
        		'type'=>'MultiPrivacy', //-- da aggiornare
        		'name'=>Str::plural('privacy'),
        		'col_bs_size' => 12,
        	],
        	*/
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
    public function tabs(): array {
        $tabs_name = [];

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
     * Get the filters available for the resource.
     *
     * @return array
     */
    public function filters(Request $request = null): array {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @return array
     */
    public function lenses(Request $request) {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @return array
     */
    public function actions(): array {
        return [
            new Actions\ChangeStatusBellBoyAction(),
            new Actions\ChangeStatusCartAction(),
        ];
    }

    /**
     * @return null
     */
    public function avatar() {
        return null;
    }

    /*
    public function createSpecialCase(){
        $params = optional(\Route::current())->parameters();
        list($containers,$items)=params2ContainerItem($params);
        $request=\Request::capture();
        return CrudTrait::create($request,last($containers),last($params));
    }

    public function storeSpecialCase(){
        $request=\Request::capture();
        $rules=$this->rules();
        $rules_messages=$this->rulesMessages();
        $request->validate($rules, $rules_messages);
        echo 'non dovrei essere qui';
    }
    */

    public function storeCallback(array $params): object {
        extract($params);
        if (! isset($data)) {
            dddx(['err' => 'data is missing']);

            return (object) [];
        }
        if (! isset($row)) {
            dddx(['err' => 'row is missing']);

            return (object) [];
        }

        $user = User::query()->create($data);
        $perm = PermUser::query()->firstOrCreate(['user_id' => $user->user_id]);
        $row->update([
            'post_type' => 'restaurant_owner',
            'user_id' => $user->user_id,
        ]);
        $res = event(new StoreRestaurantOwnerEvent($user));
        //$this->generateUUIDVerificationToken($user);
        Auth::login($user, true);
        //$this->guard()->login($user); ???
        Session::flash('swal', [
            'type' => 'success',
            'title' => trans('food::restaurant_owner.store_success.title'),
            'text' => trans('food::restaurant_owner.store_success.text'),
            'footer' => trans('food::restaurant_owner.store_success.footer'),
        ]);
        //ddd($user);ddd($row);
        return $row;
    }

    public function indexEditSubs(): array {
        //return ['cartsInProgress', 'bellBoys'];
        return ['carts', 'bellBoys'];
    }
}
