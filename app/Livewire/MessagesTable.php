<?php

namespace App\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessagesTable extends Component
{
    public function render()
    {
        return view('livewire.messages-table', [
            'messages' => Message::all(),
        ]);
    }
}
