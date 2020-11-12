<?php

namespace App\Listeners;

use App\Events\ComplexOperationsEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\User;
use Mail;

class ComplexOperationsListener
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
     * @param  ComplexOperationsEvent  $event
     * @return void
     */
    public function handle(ComplexOperationsEvent $event)
    {
        //long and complex operations or queries to database
        // send emails to all users to inform with the user updates 
        $users = User::all();

        foreach($users as $user) {
           Mail::to($user)->send('emails.example');
        }
    }
}
