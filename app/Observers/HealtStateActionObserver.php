<?php

namespace App\Observers;

use App\Models\HealtState;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class HealtStateActionObserver
{
    public function created(HealtState $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'HealtState'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
