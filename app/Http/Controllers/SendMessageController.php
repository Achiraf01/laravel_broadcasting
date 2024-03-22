<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SendMessageController extends Controller
{

    public function send(int $user_id)
    {
        $user = User::find($user_id);
        $event = new SendMessageEvent($user);
        event($event);
        return redirect()->back();
    }
}
