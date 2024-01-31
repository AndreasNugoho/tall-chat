<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;

class ChatBox extends Component
{

    public $selectedConversation;
    public $body;
    public $loadedMessages;

    public function loadMessage()
    {
        $this->loadedMessages = Message::where('conversation_id', $this->selectedConversation->id)->get();
    }

    public function sendMessage()
    {
        $this->validate(['body' => 'required|string']);

        $createdMessage = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $this->selectedConversation->getReceiver()->id,
            'body' => $this->body,

        ]);

        $this->reset('body');

        //dd($createdMessage);
        //dd($this->body);
    }

    public function mount()
    {
        $this->loadMessage();
    }

    public function render()
    {
        return view('livewire.chat.chat-box');
    }
}
