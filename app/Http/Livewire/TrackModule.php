<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Track;

class TrackModule extends Component
{
    public Track $track;

    protected $rules = [
        'track.name' => 'required',
        'track.lat' => 'required',
        'track.long' => 'required',
    ];

    public function deleteTrack(){
        $this->track->delete();
        $this->dispatchBrowserEvent('trackdeleted');
        $this->emit('trackDeleted');
    }

    public function render()
    {
        return view('livewire.track-module');
    }
}
