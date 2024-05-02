<?php

namespace App\Http\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotificationList extends Component
{
    public function render()
    {
        $notifications = Auth::user()->unreadNotifications()->paginate(3);
        $lastPage = count($notifications) == 0 ? $notifications->lastPage() : null;

        return view('livewire.admin.notification-list', [
            'notifications' => Auth::user()->unreadNotifications()->paginate(3, ['*'], 'page', $lastPage),
        ]);
    }
}
