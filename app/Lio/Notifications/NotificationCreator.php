<?php namespace Lio\Notifications;

class NotificationCreator
{
    protected $notifications;

    public function __construct(NotificationRepository $notifications, NotificationPusher $pusher)
    {
        $this->notifications = $notifications;
        $this->notificationPusher = $pusher;
    }

    public function create($message, $model, $user, $pushToOwner = false)
    {
        // Temp
        $message = "New reply to your thread: {$model->title} by {$model->author->name}";

        $notification = $this->notifications->getNew();
        $notification->message = $message;
        $notification->owner_type = get_class($model);
        $notification->owner_id = $model->id;
        $notification->user_id = $user->id;

        $notification->save();

        if($pushToOwner) {
            $this->notificationPusher->push($message, $notification->url, $user);
        }
    }
}