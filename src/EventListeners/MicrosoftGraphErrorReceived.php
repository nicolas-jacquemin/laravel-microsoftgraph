<?php

namespace Nicojqn\Microsoftgraph\EventListeners;

use Illuminate\Foundation\Events\Dispatchable;

class MicrosoftGraphErrorReceived
{
    use Dispatchable;

    public function __construct(public $accessData)
    {
    }
}
