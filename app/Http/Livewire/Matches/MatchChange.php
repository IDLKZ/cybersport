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
    public $current;
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
            $match = $this->match;
            if(!is_null($match)){
                $tour = Tournament::find($match["tournament_id"]);
                $curr = Step::find($match["step_id"]);
                $team1 = Team::find($match["team1"]);
                $team2 = Team::find($match["team2"]);
                $winner = !is_null($match['winner']) ? Team::find($match["winner"]) : ['title' => null];
                $this->current["tournament"] = $tour["title"];
                $this->current["step"] = $curr["title"];
                $this->current["team1"] = $team1["title"];
                $this->current["team2"] = $team2["title"];
                $this->current["winner"] = $winner["title"];
            }


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
        $match = $this->match;
        $current = $this->current;


            return view('livewire.matches.match-change',compact("tournaments","teams","steps","match","current"));



    }
}
