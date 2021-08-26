<?php

declare(strict_types=1);

namespace Modules\Food\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Modules\Xot\Contracts\UserContract;

/**
 * Class RestaurantOwnerRegisteredMail.
 */
class RestaurantOwnerRegisteredMail extends Mailable {
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
        return
            $this->from('info@yourservername.com')
                 ->subject('Conferma Account Ristoratore')
                 ->view('food::email.RestaurantOwnerRegisteredMailView');
    }
}
