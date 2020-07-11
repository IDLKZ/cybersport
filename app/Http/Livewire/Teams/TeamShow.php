<?php

namespace App\Http\Livewire\Teams;

use Livewire\Component;

class TeamShow extends Component
{
    protected $listeners = ['getInfo' => 'showTeam'];
    public $data;
    public $game;


    public function render()
    {
        return view('livewire.teams.team-show');
    }

    public function showTeam($data){
        $this->data = $data[0];
        $this->game = $data[1];
    }
}
