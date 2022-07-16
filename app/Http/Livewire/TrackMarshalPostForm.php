<?php

namespace App\Http\Livewire;

use App\Models\MarshalPost;
use Livewire\Component;
use App\Models\Track;
use Illuminate\Validation\Rule;

class TrackMarshalPostForm extends Component
{
    public Track $track;
    public MarshalPost $mp;

    protected $listeners = [
        'marshalPostDeleted' => 'render',
        'marshalPostAdded' => 'render'
    ];

    protected function rules()
    {
        return [
            'mp.number' => [
                'required',
                Rule::unique('marshal_posts','number')->where(fn ($query) => $query->where('track_id', $this->track->id))
            ],
            'mp.lat' => 'required',
            'mp.long' => 'required',
        ];
    }

    public function mount()
    {
        $this->mp = new MarshalPost();
    }

    public function addMarshalPost()
    {
        $this->validate();
        $this->track->marshalPosts()->save($this->mp);
        $this->mp = new MarshalPost();
        $this->emitSelf('marshalPostAdded');
    }

    public function render()
    {
        return view('livewire.track-marshal-post-form');
    }
}
