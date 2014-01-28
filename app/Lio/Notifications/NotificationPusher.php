<?php namespace Lio\Notifications;

use App;

class NotificationPusher
{
    public function __construct()
    {
        $this->pusher = App::make('pusher');
    }

    public function push($message, $url, $user)
    {
        $message = \View::make('layouts._notification')->with(compact('message', 'url'))->render();
        $this->pusher->trigger( $user->getPusherChannel(), 'message', ['message' => $message, 'url' => $url]);
    }
}