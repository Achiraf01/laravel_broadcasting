<?php

use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

/*
Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

*/

Broadcast::channel('group.{id}', function ($user, $id) {
    if ((int) $user->group_id === (int) $id) {
        return ['id' => $user->id, 'name' => $user->name];
    }
});


Broadcast::channel('receptionist.{userId}', function ($user, $userId) {
    return (int)  $user->id === (int) $userId;
});