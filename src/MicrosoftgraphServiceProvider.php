<?php

namespace LLoadout\Microsoftgraph;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MicrosoftgraphServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('microsoftgraph')
            ->hasConfigFile();

        $this->app['router']->get('graph/connect', [
            'uses' => '\LLoadout\Microsoftgraph\Microsoftgraph@connect',
            'as' => 'graph.connect',
        ])->middleware('web');

        $this->app['router']->get('graph/callback', [
            'uses' => '\LLoadout\Microsoftgraph\Microsoftgraph@callback',
            'as' => 'graph.callback',
        ])->middleware('web');
    }
}
