<?php

namespace App\Http\Livewire\Teams;

use App\Game;
use App\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamAdd extends Component
{
    use WithFileUploads;
    public $title;
    public $email;
    public $phone;
    public $secret_key;
    public $logo;
    public $captain;
    public $info;
    public $status;
    public $game_id;

    public function updated($field){

        $this->validateOnly($field,[
                'title'=>'required|unique:teams',
                'email'=>'required|email',
                'phone'=>'required',
                'logo'=>'sometimes|nullable|image|max:2048',
                'captain'=>'required',
                'info'=>'sometimes|nullable',
                'game_id'=>'required',
            ]
        );
    }

    public function submit(){
        $this->validate([
            'title'=>'required|unique:teams',
            'email'=>'required|email',
            'phone'=>'required',
            'logo'=>'sometimes|nullable|image|max:2048',
            'captain'=>'required',
            'info'=>'sometimes|nullable',
            'game_id'=>'required',
        ]);
        if(Team::saveTeam($this)){
            return $this->redirect("/admin");
        }
        else{
            dd(404);
        }
    }

    public function render()
    {
        $games = Game::all();
        return view('livewire.teams.team-add',compact("games"));
    }
}
