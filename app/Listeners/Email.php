<?php

namespace App\Listeners;

use App\Events\UserHasRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class Email
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param UserHasRegistered $event
     */
    public function welcome(UserHasRegistered $event)
    {
        //
        //dd('The user: ' . $event->name . ' has registered, fire off an email');
    }
}
