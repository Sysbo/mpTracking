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
        'teamDeleted' => 'render'
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
        $this->teams = $this->teams->sortBy('number');
    }

    public function addTeam()
    {
        $this->validate();
        $this->team->save();
        $this->team = new Team();
        $this->render();
    }
    public function render()
    {
        return view('livewire.teams-form');
    }
}
