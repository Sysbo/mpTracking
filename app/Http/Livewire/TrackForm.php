<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Track;

class TrackForm extends Component
{
    public Track $track;

    protected $rules = [
        'track.name' => 'required',
        'track.lat' => 'required',
        'track.long' => 'required',
    ];

    public function updatedTrack($value, $key){
        $this->validateOnly("track.".$key);
        $this->track->update([$key, $value]);
        session()->flash('message', 'Post successfully updated.');
        $this->dispatchBrowserEvent('trackupdated');
    }

    public function render()
    {
        return view('livewire.track-form');
    }
}
