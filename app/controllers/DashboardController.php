<?php

class DashboardController extends BaseController
{
    public function getIndex()
    {
        $user = Auth::user();
        $user->load(['notifications']);

        $notifications = $user->notifications;
        $notifications->load('owner');

        $this->view('dashboard.index', compact('user', 'notifications'));
    }
}