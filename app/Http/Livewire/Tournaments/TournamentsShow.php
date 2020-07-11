<?php

namespace App\Http\Livewire\Tournaments;

use Livewire\Component;

class TournamentsShow extends Component
{

    protected $listeners = ['getInfo' => 'showTeam'];
    public $data;


    public function render()
    {
        return view('livewire.tournaments.tournaments-show');
    }

    public function showTeam($data){
        $this->data = $data;
    }
}
