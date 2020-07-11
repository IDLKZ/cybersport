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
            'phone'=>'required|numeric',
            'logo'=>'sometimes|nullable|image|max:2048',
            'secret_key' => 'required',
            'captain'=>'required',
            'info'=>'sometimes|nullable',
            'game_id'=>'required',
            ],[], ['game_id' => 'тип игры', 'captain' => 'капитан команды']
        );
    }

    public function submit(){
        $this->validate([
            'title'=>'required|unique:teams',
            'email'=>'required|email',
            'phone'=>'required|numeric',
            'logo'=>'sometimes|nullable|image|max:2048',
            'captain'=>'required',
            'secret_key' => 'required',
            'info'=>'sometimes|nullable',
            'game_id'=>'required',
        ], [], ['game_id' => 'тип игры', 'captain' => 'капитан команды']);

        if(Team::saveTeam($this)){
            return redirect()->route('main');
        }
        else{
            abort(404);
        }
    }
}
