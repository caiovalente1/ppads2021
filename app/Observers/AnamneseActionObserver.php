<?php

namespace App\Observers;

use App\Models\Anamnese;
use App\Notifications\DataChangeEmailNotification;
use Illuminate\Support\Facades\Notification;

class AnamneseActionObserver
{
    public function created(Anamnese $model)
    {
        $data  = ['action' => 'created', 'model_name' => 'Anamnese'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }

    public function updated(Anamnese $model)
    {
        $data  = ['action' => 'updated', 'model_name' => 'Anamnese'];
        $users = \App\Models\User::whereHas('roles', function ($q) { return $q->where('title', 'Admin'); })->get();
        Notification::send($users, new DataChangeEmailNotification($data));
    }
}
