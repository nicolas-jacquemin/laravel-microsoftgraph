<?php

namespace Nicojqn\Microsoftgraph\EventListeners;

use Illuminate\Foundation\Events\Dispatchable;

class MicrosoftGraphCallbackReceived
{
    use Dispatchable;

    public function __construct(public $accessData)
    {
    }
}
