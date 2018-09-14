<?php

namespace App\Listeners;

use App\Events\SpshuaxinEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SpshuaxinListener
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
     * @param  SpshuaxinEvent  $event
     * @return void
     */
    public function handle(SpshuaxinEvent $event)
    {
        $serials=DB::select('select * from serials');
        foreach ($serials as $serials)
        return response()->json(array('serials'=> $serials),200);
    }
}
