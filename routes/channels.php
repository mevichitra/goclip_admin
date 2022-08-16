<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Conversation;
use App\User;

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

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('chat', function ($user) {
    // return true;
    return ['id' => $user->user_id, 'name' => $user->fname];
});

// Broadcast::channel('chat.{ad_id}.{owner_id}.{customer_id}.{to_id)', function ($user, $to_id) {
//     return (int) $user->id === (int) $to_id;
// });

Broadcast::channel('chat.{conversation}', function ($user, Conversation $conversation) {

    if($user->user_id == $conversation->user_from || $user->user_id == $conversation->user_to )
    {
        return true;
    }
    return false;
});
// Broadcast::channel('chat.{conversation}', function ($user, Conversation $conversation) {

//     if($user->id == $conversation->user_from || $user->id == $conversation->user_to )
//     {
//         return true;
//     }
//     return false;
// });