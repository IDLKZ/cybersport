<?php

namespace App\Http\Livewire\Matches;

use App\Match;
use Livewire\Component;

class MatchShow extends Component
{
    protected $listeners = ['getInfo' => 'showMatch'];
    public $data;

    public function showMatch($id){
        $this->data = Match::find($id);
    }

    public function render()
    {
        return view('livewire.matches.match-show');
    }
}
