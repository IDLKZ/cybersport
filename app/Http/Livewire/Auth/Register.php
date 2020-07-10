<?php

namespace App\Http\Livewire\Auth;

use App\Game;
use App\Team;
use Livewire\Component;
use Livewire\WithFileUploads;
class Register extends Component
{
    use WithFileUploads;
    public $title;
    public $email;
    public $phone;
    public $secret_key;
    public $logo;
    public $captain;
    public $info;
    public $game_id;

    public function render()
    {
        $games = Game::all();
        return view('livewire.auth.register',compact('games'));
    }

    public function updated($field){

        $this->validateOnly($field,[
            'title'=>'required|unique:teams',
            'email'=>'required|email',
            'phone'=>'required',
            'logo'=>'required|image|max:2048',
            'captain'=>'required',
            'info'=>'required',
            'game_id'=>'required',
            ]
        );
    }

    public function submit(){
        $this->validate([
            'title'=>'required|unique:teams',
            'email'=>'required|email',
            'phone'=>'required',
            'logo'=>'required|image|max:2048',
            'captain'=>'required',
            'info'=>'required',
            'game_id'=>'required',
        ]);
        if(Team::saveTeam($this)){
            return $this->redirect("/register");
        }
        else{
            dd(404);
        }
    }
}
