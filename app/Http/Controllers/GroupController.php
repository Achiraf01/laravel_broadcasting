<?php

namespace App\Http\Controllers;

use App\Events\GroupWizzEvent;
use App\Models\Group;
use App\Notifications\DemoNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GroupController extends Controller
{


    public function index()
    {
        $groups = Group::all();
        return view('groups.index', compact('groups'));
    }

    public function notify(int $group_id)
    {
        $group = Group::find($group_id);
        $sender = Auth::user();
        $sender->notify(new DemoNotification($group));
        $group = Group::find($group_id);
        broadcast(new GroupWizzEvent($group, $sender))->toOthers();
        return redirect()->back();
    }
}
