<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Log;

class OrderShippedListener implements ShouldQueue
{

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  $event
     * @return void
     */
    public function handle($event)
    {
        Log::info('Order shipped from Email service 2:' . json_encode($event));
    }
}
