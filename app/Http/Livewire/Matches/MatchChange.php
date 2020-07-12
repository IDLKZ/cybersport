<?php

namespace App\Http\Livewire\Matches;

use App\Match;
use App\Step;
use App\Team;
use App\Tournament;
use Livewire\Component;

class MatchChange extends Component
{
    protected $listeners = ['changeMatch'];
    public $match;
    public $tournament_id;
    public $step_id;
    public $team1;
    public $team2;
    public $winner;
    public $result;
    public $info;
    public $start;



    public function changeMatch($id){
        if ($id){

            $this->match = Match::find($id);
            $this->result=$this->match["result"];
            $this->info=$this->match["info"];
            $this->start=$this->match["start"];
            $this->tournament_id = $this->match["tournament_id"];
            $this->step_id = $this->match["step_id"];
            $this->team1 = $this->match["team1"];
            $this->team2 = $this->match["team2"];
            $this->winner = $this->match["winner"];



        }
        else{
            $this->match = null;
        }
    }

    public function updated($field){
        $this->validateOnly($field,[
            "tournament_id"=>"required",
            "step_id"=>"required",
            "team1"=>"required|different:team2",
            "team2"=>"required|different:team1",
        ]);

    }

    public function submit(){
        $this->validate([
            "tournament_id"=>"required",
            "step_id"=>"required",
            "team1"=>"required|different:team2",
            "team2"=>"required|different:team1",
        ]);

        if (Match::updateMatch($this)){
            return redirect()->back();
        }
        else{
            abort(404);
        }
    }


    public function render()
    {
        $tournaments = Tournament::where("status",1)->get();
        $teams = Team::all();
        $steps = Step::all();

        return view('livewire.matches.match-change',compact("tournaments","teams","steps"));



    }
}
