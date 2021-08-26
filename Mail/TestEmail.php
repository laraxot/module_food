<?php

declare(strict_types=1);

namespace Modules\Food\Emails;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TestEmail extends Mailable {
    use Queueable;
    use SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('view.name');
    }
}
