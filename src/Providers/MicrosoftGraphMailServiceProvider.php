<?php

namespace Nicojqn\Microsoftgraph\Providers;

use Illuminate\Mail\MailServiceProvider;
use Nicojqn\Microsoftgraph\MailManager\MicrosoftGraphMailManager;

class MicrosoftGraphMailServiceProvider extends MailServiceProvider
{
    /**
     * Register the Illuminate mailer instance.
     *
     * @return void
     */
    protected function registerIlluminateMailer()
    {
        $this->app->singleton('mail.manager', function ($app) {
            return new MicrosoftGraphMailManager($app);
        });

        $this->app->bind('mailer', function ($app) {
            return $app->make('mail.manager')->mailer();
        });
    }
}
