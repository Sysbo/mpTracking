<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Track;
use App\Models\Event;
use App\Models\Team;
use Carbon\CarbonPeriod;

class AttributionsForm extends Component
{
    public Event $event;
    public Track $track;
    public $teams;
    public $days;

    public function mount(){
        $this->teams = Team::all();
        $period = CarbonPeriod::create($this->event->date_start, $this->event->date_end);
        $this->days = $period->toArray();
    }

    public function render()
    {
        return view('livewire.attributions-form');
    }
}
