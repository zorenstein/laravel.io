<?php namespace Lio\Notifications;

use Lio\Core\EloquentBaseRepository;

class NotificationRepository extends EloquentBaseRepository
{
    public function __construct(Notification $model)
    {
        $this->model = $model;
    }
}
