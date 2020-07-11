<?php

namespace App\Http\Livewire\Teams;

use App\Game;
use App\Team;
use Livewire\Component;
use Livewire\WithFileUploads;

class TeamChange extends Component
{

    protected $listeners = ['changeTeam'];

    use WithFileUploads;
    public $team;

    public $title;
    public $email;
    public $phone;
    public $secret_key;
    public $logo;
    public $captain;
    public $info;
    public $status;
    public $game_id;
    public $team_id;
    public $img;
    public $game_title;

    public function changeTeam($id){
        if ($id){
            $this->team = Team::find($id);
            $this->title=$this->team["title"];
            $this->email=$this->team["email"];
            $this->phone=$this->team["phone"];
            $this->secret_key=$this->team["secret_key"];
            $this->captain=$this->team["captain"];
            $this->game_id=$this->team["game_id"];
            $this->info=$this->team["info"];
            $this->status=$this->team["status"];
            $this->team_id=$id;
            $this->img = $this->team['logo'];
            $tima = Game::where('id', $this->team["game_id"])->first();
            $this->game_title = $tima->title;
        }
        else{
            $this->team = null;
        }
    }


    public function updated($field){
        $this->validateOnly($field,[
                'title'=>"required|unique:teams,title,$this->team_id",
                'email'=>'required|email',
                'phone'=>'required',
                'secret_key'=>'required',
                'logo'=>'sometimes|nullable|image|max:2048',
                'captain'=>'required',
                'info'=>'sometimes|nullable',
                'game_id'=>'required',
            ]
        );
    }

    public function submit(){

        $this->validate([
            'title'=>"required|unique:teams,title,$this->team_id",
            'email'=>'required|email',
            'phone'=>'required',
            'secret_key'=>'required',
            'logo'=>'sometimes|nullable|image|max:2048',
            'captain'=>'required',
            'info'=>'sometimes|nullable',
            'game_id'=>'required',
        ]);
        if(Team::updateTeam($this)){
            return redirect()->route('admin');
        }
        else{
            dd(404);
        }
    }



    public function render()
    {
        $games = Game::all();
        return view('livewire.teams.team-change',compact("games"));
    }
}
