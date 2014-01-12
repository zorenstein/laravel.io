<?php namespace Lio\Notifications;

use McCool\LaravelAutoPresenter\BasePresenter;
use App, Input, Str, Request;

class NotificationPresenter extends BasePresenter
{
    public $content = [];

    public function displayMessage()
    {
        switch ($this->owner_type) {
            case "Lio\Comments\Comment":
                $this->commentMessage();
                break;
            case "whatever":
                $this->threadMessage();
                break;
        }

        return $this->content;
    }

    private function commentMessage()
    {
        $this->content = [
            'message'   => 'whatever message',
            'author'    => $this->resource->owner->author->name,
            'title'     => $this->resource->owner->parent->title,
            'url'       => $this->resource->owner->commentUrl
        ];
    }

    private function threadMessage()
    {
        $this->content = [
            'message'   => 'whatever message',
            'author'    => $this->resource->owner->author->name,
            'title'     => $this->resource->owner->parent->title,
            'url'       => $this->resource->owner->commentUrl
        ];
    }
}

