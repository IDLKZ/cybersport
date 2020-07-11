<?php

namespace App\Http\Livewire\Tournaments;

use App\Game;
use App\Tournament;
use Livewire\Component;
use Livewire\WithFileUploads;

class TournamentsAdd extends Component
{
    use WithFileUploads;
    public $title;
    public $img;
    public $start;
    public $info;
    public $status;
    public $game_id;


    public function updated($field){

        $this->validateOnly($field,[
                'title'=>'required',
                'img'=>'sometimes|nullable|image|max:2048',
                'game_id'=>'required',
            ]
        );
    }

    public function submit(){
        $this->validate([
            'title'=>'required',
            'img'=>'sometimes|nullable|image|max:2048',
            'game_id'=>'required',
        ]);
        if(Tournament::saveTournament($this)){
            return redirect()->route('backend-tournaments');
        }
        else{
            abort(404);
        }
    }


    public function render()
    {
        $games = Game::all();
        return view('livewire.tournaments.tournaments-add',compact("games"));
    }
}
