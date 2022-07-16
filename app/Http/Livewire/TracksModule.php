<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Track;
use Illuminate\Validation\Rule;

class TracksModule extends Component
{
    public $tracks;
    public Track $track;

    protected $listeners = [
        'trackDeleted' => 'render'
    ];

    protected function rules()
    {
        return [
            'track.name' => [
                'required',
                Rule::unique('tracks','name')
            ],
            'track.lat' => 'required',
            'track.long' => 'required',
        ];
    }

    public function mount()
    {
        $this->track = new Track();
    }

    public function addTrack()
    {
        $this->validate();
        $this->track->save();
        $this->track = new Track();
        $this->render();
    }

    public function render()
    {
        return view('livewire.tracks-module');
    }

}