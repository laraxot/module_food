<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

//-------- services --------
use Modules\Food\Models\RestaurantOwner;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class RestaurantClaimsAction.
 */
class RestaurantClaimsAction extends XotBasePanelAction {
    public bool $onContainer = false;

    public bool $onItem = true; //onlyContainer
    //mettere freccette su e giù

    public string $icon = '<i class="fas fa-gavel"></i>';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle() {
        $view = 'pub_theme::restaurant.modal.'.$this->getName();
        //dddx($this->row);

        return ThemeService::view($view)
            ->with('row', $this->row);
        //ddd($this->row);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postHandle() {
        $data = request()->all();
        //da owner a restaurant (morph ) false
        //da restaurant a owner (morph) true
        $restaurantOwner = RestaurantOwner::query()->create([
            'auth_user_id' => \Auth::id(),
            'email' => $data['restaurantOwner']['email'],
            'phone' => $data['restaurantOwner']['phone'],
        ]);
        $restaurantOwner->save();
        $restaurantOwner->restaurants()->save($this->panel->row, ['auth_user_id' => \Auth::id(), 'is_reclamed' => 1]);

        \Session::flash('status', 'Ristorante reclamato');
        $url = $this->panel->url(['act' => 'show']);

        return redirect($url);
    }
}
