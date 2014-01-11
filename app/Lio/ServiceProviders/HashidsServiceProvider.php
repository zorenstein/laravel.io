<?php namespace Lio\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Hashids\Hashids;
use Config;

class HashidsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('hashids', function()
        {
            return new Hashids(Config::get('app.key'), 12);
        });
    }

    public function provides()
    {
        return ['hashids'];
    }
}

