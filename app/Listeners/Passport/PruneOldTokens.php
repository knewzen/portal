<?php

namespace App\Listeners\Passport;

use App\Events\Laravel\Passport\Events\RefreshTokenCreated;

class PruneOldTokens
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
     * @param RefreshTokenCreated $event
     *
     * @return void
     */
    public function handle(RefreshTokenCreated $event)
    {
        //
    }
}
