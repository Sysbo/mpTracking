<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;

class EventForm extends Component
{

    public Event $event;

    protected $rules = [
        'event.name' => 'required',
        'event.date_start' => 'required',
        'event.date_end' => 'required',
    ];

    public function updatedEvent($value, $key){
        $this->validateOnly("event.".$key);
        $this->event->update([$key, $value]);
        $this->emit('eventUpdated');
    }

    public function deleteEvent(){
        $this->event->delete();
        $this->emit('eventDeleted');
    }

    public function render()
    {
        return view('livewire.event-form');
    }
}
