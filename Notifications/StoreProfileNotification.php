<?php

declare(strict_types=1);

namespace Modules\Food\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\URL;

/**
 * Class StoreProfileNotification.
 */
class StoreProfileNotification extends Notification {
    use Queueable;

    /**
     * The callback that should be used to build the mail message.
     */
    protected static ?\Closure $toMailCallback;

    /**
     * Create a new notification instance.
     */
    /*
    public function __construct()
    {
        //
    }
    */

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */

    /**
     * Build the mail representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        // errore quando registro un nuovo account tramite apposito form:
        // Typed static property Modules\Food\Notifications\StoreProfileNotification::$toMailCallback
        // must not be accessed before initialization
        /*
        if (static::$toMailCallback) {
            return \call_user_func(static::$toMailCallback, $notifiable);
        }
        */
        $verification_url = $this->verificationUrl($notifiable);

        return (new MailMessage())
            ->subject(Lang::getFromJson('Verify Email Address'))
            ->greeting('Hello!')
            ->view('food::mail.profile.store', ['verification_url' => $verification_url])
            ;
        /*
        ->subject(Lang::getFromJson('Verify Email Address'))
        ->markdown('food::notifications.email', ['subcopy' => 'subcopy']) //, ['user' => $this->user]
        ->line(Lang::getFromJson('Please click the button below to verify your email address.'))
        ->action(
            Lang::getFromJson('Verify Email Address'),
            $this->verificationUrl($notifiable)
        )
        ->line(Lang::getFromJson('If you did not create an account, no further action is required.'));
        //*/
    }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param mixed $notifiable
     *
     * @return string
     */
    protected function verificationUrl($notifiable) {
        return URL::temporarySignedRoute(
            'verification.verify',
            Carbon::now()->addMinutes(60),
            [
                'id' => $notifiable->getKey(),
                'hash' => sha1($notifiable->getEmailForVerification()),
            ]
        );
    }

    /**
     * Set a callback that should be used when building the notification mail message.
     *
     * @return void
     */
    public static function toMailUsing(\Closure $callback) {
        static::$toMailCallback = $callback;
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     *
     * @return array
     */
    public function toArray($notifiable) {
        return [
        ];
    }
}