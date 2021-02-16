<<<<<<< HEAD
<?php

namespace Modules\Food\Listeners;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Modules\Food\Events\StoreProfileEvent;
use Modules\Food\Mail\StoreProfileMail;
use Modules\Food\Notifications\StoreProfileNotification;

/**
 * Class StoreProfileListener
 * @package Modules\Food\Listeners
 */
class StoreProfileListener {
    /**
     * Handle the event.
     *
     * @param StoreProfileEvent $event
     * @return mixed
     */
    public function handle(StoreProfileEvent $event) {
        //app('log')->info($event->msg);
        //\Mail::to($event->user)->send(new StoreProfileMail($event->user));
        try {
            $event->user->notify(new StoreProfileNotification());
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
=======
<?php

namespace Modules\Food\Listeners;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Modules\Food\Events\StoreProfileEvent;
use Modules\Food\Mail\StoreProfileMail;
use Modules\Food\Notifications\StoreProfileNotification;

/**
 * Class StoreProfileListener
 * @package Modules\Food\Listeners
 */
class StoreProfileListener {
    /**
     * Handle the event.
     *
     * @param StoreProfileEvent $event
     * @return mixed
     */
    public function handle(StoreProfileEvent $event) {
        //app('log')->info($event->msg);
        //\Mail::to($event->user)->send(new StoreProfileMail($event->user));
        try {
            $event->user->notify(new StoreProfileNotification());
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
>>>>>>> a6dde0f (first)
