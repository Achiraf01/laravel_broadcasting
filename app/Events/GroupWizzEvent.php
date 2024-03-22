<?php

namespace App\Events;

use App\Models\Group;
use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GroupWizzEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $group;
    private $sender;
    /**
     * Create a new event instance.
     */
    public function __construct(Group $group, User $sender)
    {
        $this->group = $group;
        $this->sender = $sender;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */

    public function broadcastAs()
    {
        return 'GroupWizzEvent';
    }
    public function broadcastOn(): array
    {
        return [
            new PresenceChannel('group.' . $this->group->id),
        ];
    }
    public function broadcastWith()
    {
        return [
            'sender_id' => $this->sender->id
        ];
    }
}
