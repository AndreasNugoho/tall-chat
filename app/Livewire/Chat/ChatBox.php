<?php

namespace App\Livewire\Chat;

use App\Models\Message;
use Livewire\Component;

class ChatBox extends Component
{

    public $selectedConversation;
    public $body;
    public $loadedMessages;

    public $paginate_var = 15;

    protected $listeners = [
        'loadMore'
    ];


    public function loadMore(): void
    {

        // dd('detected');
        #increment 
        // $this->paginate_var += 15;

        #call loadMessages()

        // $this->loadMessages();

        $this->dispatch('update-chat-height');
    }


    public function loadMessage()
    {
        #get count
        $count =  Message::where('conversation_id', $this->selectedConversation->id)->count();

        #fix
        $this->loadedMessages = Message::where('conversation_id', $this->selectedConversation->id)->get();

        #skip and query
        // $this->loadedMessages = Message::where('conversation_id', $this->selectedConversation->id)
        //     ->skip($count - $this->paginate_var)
        //     ->take($this->paginate_var)
        //     ->get();

        // return $this->loadedMessages;
    }

    public function sendMessage()
    {

        $this->validate(['body' => 'required|string']);

        $createdMessage = Message::create([
            'conversation_id' => $this->selectedConversation->id,
            'sender_id' => auth()->id(),
            'receiver_id' => $this->selectedConversation->getReceiver()->id,
            'body' => $this->body

        ]);


        $this->reset('body');

        #scroll to bottom of message

        $this->dispatch('scroll-bottom');

        $this->loadedMessages->push($createdMessage);

        $this->selectedConversation->updated_at = now();
        $this->selectedConversation->save();

        $this->dispatch('refresh');
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
