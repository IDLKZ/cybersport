<?php

namespace App\Http\Livewire\Tournaments;

use App\Game;
use App\Tournament;
use Livewire\Component;
use Livewire\WithFileUploads;

class TournamentsChange extends Component
{
    protected $listeners = ['changeTournament'];

    use WithFileUploads;
    public $tournament;
    public $image;

    public $title;
    public $img;
    public $start;
    public $info;
    public $status;
    public $game_id;
    public $game_id2;
    public $game_id2_title;



    public function changeTournament($id){
        if ($id){
            $this->tournament = Tournament::find($id);
            $this->title = $this->tournament["title"];
            $this->start = $this->tournament["start"];
            $this->info = $this->tournament["info"];
            $this->status = $this->tournament["status"];
            $this->game_id = $this->tournament["game_id"];
            $this->image = $this->tournament["img"];
            $this->game_id2 =  $this->tournament["game_id"];
            $title = Game::find($this->tournament["game_id"]);
            $this->game_id2_title = $title->title;
//            увууауауававаав


        }
        else{
            $this->tournament = null;
        }
    }





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
        if(Tournament::updateTournament($this)){
            return back();
        }
        else{
            dd(404);
        }
    }





    public function render()
    {
        $games = Game::all();

        return view('livewire.tournaments.tournaments-change',compact("games"));
    }
}
