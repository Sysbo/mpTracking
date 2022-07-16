<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Track;
use App\Models\Event;
use Illuminate\Support\Facades\DB;

class TrackEventForm extends Component
{

    public Track $track;
    public Event $event;
    //public $years;
    //public $year;
    //public $events;

    protected $listeners = [
        'eventDeleted' => 'render',
        'eventAdded' => 'render',
        'eventUpdated' => 'render',
    ];

    protected function rules()
    {
        return [
            'event.name' => [
                'required',
            ],
            'event.date_start' => 'required',
            'event.date_end' => 'required',
        ];
    }

    public function mount()
    {
        $this->event = new Event();
        //$this->events = $this->track->events->sortBy('date_start');
        //$this->years = DB::select('SELECT EXTRACT(year FROM date_start) AS year FROM events GROUP BY EXTRACT(year FROM date_start)');
    }

    /*public function updatedYear(){
        $this->events = $this->track->events;
    }*/

    public function addEvent()
    {
        $this->validate();
        $this->track->events()->save($this->event);
        //$this->events = Event::where('track_id', $this->track->id)->get();
        $this->event = new Event();
        $this->emitSelf('eventAdded');
    }
    public function render()
    {
        return view('livewire.track-event-form');
    }
}
