<?php

namespace Nicojqn\Microsoftgraph\MailManager;

use Illuminate\Mail\MailManager;

class MicrosoftGraphMailManager extends MailManager
{
    protected function createMicrosoftGraphTransport()
    {
        return new MicrosoftGraphTransport();
    }
}
