<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;

class UserMessageController extends Controller
{
    public function index()
    {
        $conversation = Conversation::firstOrCreate([
            'user_id' => auth()->id()
        ], [
            'admin_id' => 1,
            'last_message_at' => now()
        ]);

        return view('user.messages.index', [
            'conversation' => $conversation,
            'messages' => $conversation->messages()->with('sender')->get()
        ]);
    }

    public function store(Request $request)
    {
        $conversation = Conversation::where('user_id', auth()->id())->first();

        Message::create([
            'conversation_id' => $conversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $conversation->admin_id,
            'content' => $request->content
        ]);

        $conversation->update(['last_message_at' => now()]);

        return back();
    }
}

