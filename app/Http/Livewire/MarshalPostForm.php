<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\MarshalPost;
use App\Models\Track;
use Illuminate\Validation\Rule;

class MarshalPostForm extends Component
{

    public MarshalPost $mp;
    public Track $track;

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

    public function updatedMp($value, $key){
        $this->validateOnly("mp.".$key);
        $this->mp->update([$key, $value]);
        session()->flash('message', 'Post successfully updated.');
        $this->dispatchBrowserEvent('mpupdated');
    }

    public function deleteMp(){
        $this->mp->delete();
        $this->dispatchBrowserEvent('mpdeleted');
        $this->emit('marshalPostDeleted');
    }

    public function render()
    {
        return view('livewire.marshal-post-form');
    }
}
