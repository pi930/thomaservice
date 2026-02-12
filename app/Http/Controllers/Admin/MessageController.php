<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        return view('admin.messages.index', [
           'conversations' => Conversation::with(['messages.sender'])->get()
        ]);
    }

    public function show(Conversation $conversation)
    {
        $conversation->messages()
    ->whereNull('read_at')
    ->where('receiver_id', auth()->id())
    ->update(['read_at' => now()]);

         $firstSender = $conversation->messages()->with('sender')->first()?->sender;

        return view('admin.messages.show', [
            'conversation' => $conversation,
            'messages' => $conversation->messages()->with('sender')->get(),
            'firstSender' => $firstSender
        ]);
    }

    public function store(Request $request, Conversation $conversation)
{
    $firstSender = $conversation->messages()->with('sender')->first()?->sender;

    Message::create([
        'conversation_id' => $conversation->id,
        'sender_id' => auth()->id(), // admin
        'receiver_id' => $firstSender?->id, // utilisateur réel
        'content' => $request->content
    ]);

    $conversation->update(['last_message_at' => now()]);

    return back();
}

}

