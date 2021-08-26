<?php

declare(strict_types=1);

namespace Modules\Food\Listeners;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Modules\Food\Events\StoreRestaurantOwnerEvent;
use Modules\Food\Notifications\StoreRestaurantOwnerNotification;

//use Modules\Food\Mail\StoreRestaurantOwnerMail;

/**
 * Class StoreRestaurantOwnerListener.
 */
class StoreRestaurantOwnerListener {
    /**
     * Handle the event.
     *
     * @return mixed
     */
    public function handle(StoreRestaurantOwnerEvent $event) {
        //echo 'echo?';
        //app('log')->info($event->msg);
        //\Mail::to($event->user)->send(new StoreRestaurantOwnerMail($event->user));

        //ddd($res);
        try {
            $event->user->notify(new StoreRestaurantOwnerNotification());
        } catch (\Exception $e) {
            report($e);
        }

        /*
        if ($event->user instanceof MustVerifyEmail && ! $event->user->hasVerifiedEmail()) {
            $event->user->sendEmailVerificationNotification();
        }
        */
    }
}

//https://pineco.de/keep-the-code-clean-with-laravel-events/
/*
public function handle(Created $event)
    {
         Mail::to($event->user)->send(new WelcomeEmail($event->user));
    }


*/
