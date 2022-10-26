<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

use Modules\Cart\Models\Cart;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;
use Modules\Xot\Services\PanelService as Panel;

// -------- bases -----------

/**
 * Class AddItemCartAction.
 */
class AddItemCartAction extends XotBasePanelAction {
    public bool $onItem = true; // onlyContainer

    public bool $onContainer = false; // onlyContainer
    // mettere freccette su e giù

    public string $icon = '<i class="fa fa-plus"></i>';

    /**
     * @return mixed
     */
    public function handle() {
        /*
        $view = 'pub_theme::cart.modal.'.$this->getName();

        return ThemeService::view($view)
            ->with('row', $this->row);
        */
        return $this->panel->view();
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postHandle() {
        $data = request()->all();
        // dddx($data);
        // dddx(get_defined_vars());
        [$containers,$items] = params2ContainerItem();
        $shop = collect($items)->firstWhere('post_type', 'restaurant');
        $recipe = $this->row;
        $ingredient_cats = $recipe->ingredientCats;
        $item = (object) [
            'shop_id' => $shop->id,
            'shop_type' => $shop->post_type,
            'shop_title' => $shop->title,
            /*
            'item_cat_id',
            'item_cat_type'
            'item_cat_title'
            */
            'item_id' => $recipe->id,
            'item_type' => $recipe->post_type,
            'item_title' => $recipe->title,

            'pivot_id' => $recipe->pivot->id,
            'price' => $recipe->pivot->price,
            'qty' => $data['qty'],
            'user_id' => \Auth::id(),
        ];

        $item_vars = [];
        if (isset($data['product']) && is_array($data['product'])) {
            foreach ($data['product'] as $cat_id => $cat) {
                $ingredient_cat = $ingredient_cats->firstWhere('id', $cat_id);
                $ingredients = $ingredient_cat->ingredients;
                foreach ($cat as $item_id => $qty) {
                    $ingredient = $ingredients->firstWhere('id', $item_id);
                    // echo '<br/>'.$ingredient->title.'   '.$ingredient->pivot->price.'  '.$qty;
                    $tmp = (object) [
                        'var_cat_id' => $cat_id,
                        'var_cat_type' => $ingredient_cat->post_type,
                        'var_cat_title' => $ingredient_cat->title,

                        'var_item_id' => $item_id,
                        'var_item_type' => $ingredient->post_type,
                        'var_item_title' => $ingredient->title,

                        'pivot_id' => $ingredient->pivot->id,
                        'price' => $ingredient->pivot->price,
                        'qty' => $qty,
                        'user_id' => \Auth::id(),
                    ];
                    if (-1 == $tmp->qty) {
                        $tmp->price = 0; // se tolgo, il cliente non ha sconti
                    }
                    if (0 != $tmp->qty) {
                        $item_vars[] = get_object_vars($tmp);
                    }
                }
            }
        }

        if (! isset($data['cart_id'])) {
            // return 'cart non creato dal ristoratore';
            $cart = $shop->myCartWithThisRestaurant()
                ->firstOrCreate(['user_id' => \Auth::id(), 'status' => 1]);
        } else {
            // return 'cart creato dal ristoratore';
            $cart = Cart::find($data['cart_id']);
        }

        $cart_item = $cart->items()->create(get_object_vars($item));
        $cart_item_vars = $cart_item->variations()->createMany($item_vars);

        if (! isset($data['cart_id'])) {
            $url = Panel::make()->get($shop)
                ->relatedName('cuisine')
                ->url('index');

        // return redirect($url);
        } else {
            // return 'deve tornare indietro';
            // dddx($items);
            /*
            $url = route('container0.container1.show',
            [
                'lang' => app()->getLocale(),
                'container0' => 'restaurant_owner',
                'item0' => $items[0]->guid,
                'container1' => 'restaurant',
                'item1' => $items[1]->guid,
                ]);
            */
            /*
            ->with([
                'cart_id' => 36,
                '_act' => 'add_item_cart_by_restaurant_owner',
            ]);
            */

            $url = Panel::make()->get($shop)
                ->itemAction('add_item_cart_by_restaurant_owner')
                ->url(['cart_id' => $data['cart_id']]);
            // link generato
            // https://food.local/it/restaurant_owner/restaurant-owner-4/restaurant/test-ristorante
            //      ?container2=cuisine&item2=primi-piatti&container3=recipe&item3=pasta-col-sugo-della-nonna&cart_id=40&format=iframe&_act=add_item_cart_by_restaurant_owner

            // dddx($url);
            // dddx(get_defined_vars());
            // return redirect($url);

            // link dove deve ritornare
            // https://food.local/it/restaurant_owner/restaurant-owner-4/restaurant/test-ristorante
            //      ?container1=restaurant&cart_id=36&_act=add_item_cart_by_restaurant_owner
        }

        return redirect($url);
    }
}
