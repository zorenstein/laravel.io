<?php namespace Lio\ServiceProviders;

use Illuminate\Support\ServiceProvider;
use Config;

class PusherIoServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('pusher', function()
        {
            $config = Config::get('packages/pusher/pusher-php-server/config');
            return new \Pusher( $config['app_key'], $config['app_secret'], $config['app_id']);
        });
    }

    public function provides()
    {
        return ['pusher'];
    }
}
