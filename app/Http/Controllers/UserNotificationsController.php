<?php

namespace App\Http\Controllers;

class UserNotificationsController extends Controller
{
    public function show(){

       /* $notifications = auth()->user()->notifications;*/

       /* $notifications = auth()->user()->unreadNotifications;*/

        /*foreach ($notifications as $notification){
            $notification->markAsRead();
        }*/

        # it's the same, because there is function for each notification
        //vendor\laravel\framework\src\Illuminate\Notifications\DatabaseNotificationCollection.php
        /*$notifications->markAsRead();*/

        $notifications = tap(auth()->user()->unreadNotifications)->markAsRead(); // at once

        return view('notifications.show-notifications', [
            'notifications'=>$notifications
        ]);
    }
}
