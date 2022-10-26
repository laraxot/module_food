<?php

declare(strict_types=1);

namespace Modules\Food\Models\Panels\Actions;

// ------- models ---
use Illuminate\Support\Facades\Auth;
// -------- services --------
use Modules\Food\Models\Profile;
use Modules\LU\Models\User;
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Models\Panels\Actions\XotBasePanelAction;

// -------- bases -----------

/**
 * Class AttachBellBoyByRestaurantOwnerAction.
 */
class AttachBellBoyByRestaurantOwnerAction extends XotBasePanelAction {
    // public $onContainer = false;

    public bool $onItem = true; // onlyContainer
    // mettere freccette su e giù

    public string $icon = '<i class="far fa-user"></i>';

    /**
     * Perform the action.
     *
     * @return mixed
     */
    public function handle() {
        $view = 'pub_theme::restaurant.modal.'.$this->getName();

        // return $view;
        return ThemeService::view($view)
            ->with('row', $this->row);
        // ddd($this->row);
    }

    /**
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return mixed
     */
    public function postHandle() {
        $data = request()->all();

        // controllo che la mail esista tra gli utenti registrati
        \Validator::make($data, [
            'email' => 'required|exists:liveuser_general.liveuser_users',
        ])->validate();

        $user = User::query()->where('email', $data['email'])->first();
        // dddx($user);
        /*
        $profile = $user->profile;
        */
        $profile = Profile::query()->where('user_id', Auth::id())->first();
        // dddx($profile);

        $data['user_id'] = $profile->user_id;
        $data['phone'] = $profile->phone;

        $bellBoy = $profile->bellBoy()->updateOrCreate(
            ['user_id' => $data['user_id']],
            ['user_id' => $profile->user_id, 'email' => $user->email, 'phone' => $profile->phone]
        );

        $restaurant = $this->row;
        // dddx($restaurant);
        // dddx($restaurant->bellBoy->contains('id', $bellBoy->id));

        // controllo che il ristorante non abbia già questo cameriere
        if (! $restaurant->bellBoy->contains('id', $bellBoy->id)) {
            \Session::flash('status', 'Operazione riuscita');

            $restaurant->bellBoy()->save($bellBoy, ['user_id' => $bellBoy->user_id]);
        } else {
            \Session::flash('status_error', 'Hai già questo cameriere');
        }

        return $this->handle();
    }
}
