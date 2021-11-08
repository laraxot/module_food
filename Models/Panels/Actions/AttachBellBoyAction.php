<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

//------- models ---
use Illuminate\Support\Facades\Auth;
//-------- services --------
use Modules\Food\Models\Profile;
use Modules\LU\Models\User;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

//-------- bases -----------

/**
 * Class AttachBellBoyAction.
 */
class AttachBellBoyAction extends XotBasePanelAction {
    //public $onContainer = false;

    public bool $onItem = true;
    //onlyContainer
    //mettere freccette su e giù

    public string $icon = '<i class="fas fa-motorcycle"></i>';

    public $user_id;

    /**
     * AttachBellBoyAction constructor.
     */
    public function __construct(?int $user_id) {
        $this->user_id = $user_id;
    }

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle() {
        /*
        $view = 'pub_theme::restaurant.modal.'.$this->getName();

        //return $view;

        return ThemeService::view($view)
            ->with('row', $this->row);
        //ddd($this->row);
        */
        return $this->panel->view();
    }

    public function postHandle() {
        $data = request()->all();
        //dddx($data);
        if (null == $this->user_id) {
            $this->user_id = request()->input('user_id', \Auth::id());
        }

        $user = User::query()->find($this->user_id);
        $profile = Profile::query()->where('user_id', $this->user_id)->first();
        /*
        $profile = $user->profile;
        */
        try {
            $bell_boy = $profile->bellBoy()->updateOrCreate(['user_id' => $this->user_id], $data);
        } catch (\Exception $e) {
            dddx([$e->getMessage(), $e]);
        }
        if (! isset($bell_boy)) {
            dddx(['err' => 'bell_boy is missing']);

            return;
        }
        $user_data = collect($data)->only(['first_name', 'last_name'])->all();
        $user->update($user_data);

        $restaurant = $this->row;
        $restaurant->bellBoys()->save(
            $bell_boy,
            [
                'user_id' => $this->user_id,
                'post_id' => $bell_boy->id,
                'status' => $bell_boy::Candidate,
                'note' => $data['pivot_note'],
            ]
        );

        //$restaurant->bellBoys()->attach($bell_boy->id, ['user_id' => $this->user_id, 'post_id' => $bell_boy->id]);

        //$restaurant->bellBoys()->updateExistingPivot($bell_boy->id, ['user_id' => $this->user_id, 'post_id' => $bell_boy->id]);

        //$restaurant->bellBoys()->syncWithoutDetaching($bell_boy->id, ['user_id' => $this->user_id, 'post_id' => $bell_boy->id]);

        \Session::flash('status', 'Operazione eseguita');

        return $this->panel->view();
        /*
        $view = 'pub_theme::restaurant.modal.'.$this->getName();
        $view .= '_thanks';

        try {
            return ThemeService::view($view)
            ->with('row', $this->row);
        } catch (\Exception $e) {
            dddx([$e->getMessage(), $e]);
        }
        */
    }
}
