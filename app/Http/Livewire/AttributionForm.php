<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Event;
use App\Models\MarshalPost;
use App\Models\Attribution;
use App\Models\Team;
use Illuminate\Validation\Rule;

class AttributionForm extends Component
{
    public Event $event;
    public MarshalPost $marshalPost;
    public Attribution $attribution;
    public $teamNumber;
    public $day;

    protected function rules()
    {
        return [
            'teamNumber' => [
                'exists:teams,number'
            ]
        ];
    }

    public function mount()
    {

        $attributionExist = Attribution::where('event_id', $this->event->id)
            ->where('marshal_post_id', $this->marshalPost->id)
            ->where('day', $this->day)->exists();

        if ($attributionExist) {
            $this->attribution = Attribution::where('event_id', $this->event->id)
                ->where('marshal_post_id', $this->marshalPost->id)
                ->where('day', $this->day)->first();
            $this->teamNumber = $this->attribution->team->number;
        } else {
            $this->attribution = new Attribution();
            $this->attribution->event_id = $this->event->id;
            $this->attribution->marshal_post_id = $this->marshalPost->id;
            $this->attribution->day = $this->day;
        }
    }

    public function updatedTeamNumber()
    {
        $this->validate();
        if (empty($this->teamNumber)) {
            $this->attribution->delete();
        } else {
            $team = Team::where('number', $this->teamNumber)->first();
            $this->attribution->event_id = $this->event->id;
            $this->attribution->marshal_post_id = $this->marshalPost->id;
            $this->attribution->day = $this->day;
            $this->attribution->team_id = $team->id;
            $this->attribution->save();
        }
    }

    public function render()
    {
        return view('livewire.attribution-form');
    }
}
