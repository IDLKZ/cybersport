<?php

namespace App\Http\Livewire\Matches;

use App\Match;
use App\Step;
use App\Team;
use App\Tournament;
use App\TournamentTeams;
use Livewire\Component;
use Livewire\WithPagination;

class MatchList extends Component
{
    use WithPagination;
    public $matches;


    public function mount()
    {
        session()->has("tournament") == true ? session()->get("tournament") : session(["tournament"=>0]);
        session()->has("limit") == true ? session()->get("limit") : session(["limit"=>10]);
        session()->has("step") == true ? session()->get("step") : session(["step"=>0]);
    }




    public function deleteMatch($id){
        $match = Match::firstWhere('id', $id);




        $match->delete();
    }


    public function changeLimit($number){
        session(["limit"=>$number]);

    }

    public function changeTournament($number){
        session(["tournament"=>$number]);

    }

    public function changeStep($num){
        session(["step"=>$num]);
    }


    public function render()
    {
        $tournaments = Tournament::where("status",1)->get();
        $teams = Team::all();
        $steps = Step::all();
        $matches = $this->matches = Match::all();


        return view('livewire.matches.match-list',compact("tournaments","teams","steps","matches"));
    }
}
