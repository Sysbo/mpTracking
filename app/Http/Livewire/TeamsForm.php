<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Team;
use Illuminate\Validation\Rule;

class TeamsForm extends Component
{

    public $teams;
    public Team $team;

    protected $listeners = [
        'teamDeleted' => 'render',
        'teamAdded' => 'render'
    ];

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

    public function mount()
    {
        $this->team = new Team();
    }

    public function addTeam()
    {
        $this->validate();
        $this->team->save();
        $this->team = new Team();
        $this->teams = Team::all();
        $this->emitSelf('teamAdded');
    }
    public function render()
    {
        return view('livewire.teams-form');
    }
}
