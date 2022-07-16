<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use Illuminate\Validation\Rule;

class TeamForm extends Component
{

    public Team $team;

    protected function rules()
    {
        return [
            'team.number' => [
                'required',
                Rule::unique('teams','number')
            ],
            'team.name' => 'required',
        ];
    }

    public function updatedTeam($value, $key){
        $this->validateOnly("team.".$key);
        $this->team->update([$key, $value]);
        $this->emit('teamUpdated');
    }

    public function deleteTeam(){
        $this->team->delete();
        $this->emit('teamDeleted');
    }

    public function render()
    {
        return view('livewire.team-form');
    }
}
