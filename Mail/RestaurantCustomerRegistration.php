<<<<<<< HEAD
<?php

namespace Modules\Food\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Modules\Xot\Contracts\UserContract;

/**
 * Class RestaurantCustomerRegistration.
 */
class RestaurantCustomerRegistration extends Mailable {
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
        $view = 'food::email.RestaurantCustomerRegistrationView';
        //$html = view()->make($view);

        return
            $this->from('info@yourservername.com')
                 ->subject('Conferma Account')
                 //->html($html)
                 ->view($view)
                 ;
    }
}
=======
<?php

namespace Modules\Food\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Modules\Xot\Contracts\UserContract;

/**
 * Class RestaurantCustomerRegistration.
 */
class RestaurantCustomerRegistration extends Mailable {
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
        $view = 'food::email.RestaurantCustomerRegistrationView';
        //$html = view()->make($view);

        return
            $this->from('info@yourservername.com')
                 ->subject('Conferma Account')
                 //->html($html)
                 ->view($view)
                 ;
    }
}
>>>>>>> a6dde0f (first)
