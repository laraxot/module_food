<?php

namespace Modules\Food\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
//------- services -----
use Modules\Theme\Services\ThemeService;
use Modules\Xot\Contracts\UserContract;

/**
 * Class StoreRestaurantOwnerMail.
 */
class StoreRestaurantOwnerMail extends Mailable {
    use Queueable;
    use SerializesModels;

    /**
     * \User $user.
     */
    public UserContract $user;

    /**
     * Create a new message instance.
     *
     * @param UserContract $user
     */
    public function __construct($user) {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        //$view=ThemeService::getView();//'food::email.RestaurantOwnerRegisteredMailView'
        $view = 'food::mail.restaurant_owner.store';
        \Log::info('StoreRestaurantOwnerMail');
        \Log::info($view);

        return
            $this->from('info@yourservername.com')
                 ->subject('Conferma Account Ristoratore')
                 ->view($view);
    }
}
