<?php namespace Lio\Notifications;

use Lio\Core\EloquentBaseModel;

class Notification  extends EloquentBaseModel
{
    protected $table = 'notifications';

    public $presenter = 'Lio\Notifications\NotificationPresenter';

    public function owner()
    {
        return $this->morphTo('owner');
    }
}