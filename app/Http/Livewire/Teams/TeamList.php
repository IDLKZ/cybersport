<?php

namespace App\Http\Livewire\Teams;

use App\Match;
use App\Team;
use App\TournamentTeams;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;


class TeamList extends Component
{
    use WithPagination;
    protected  $teams;
    public $search;


    public function mount()
    {
        session()->has("limit") == true ? session()->get("limit") : session()->put(["limit"=>1]);
        session()->has("filter") == true ? session()->get("filter") : session()->put(["filter"=>[0,1]]);
    }

    public function changeLimit($number){
        session(["limit"=>$number]);
        $this->mount();
    }

    public function changeFilter($num,$num2 = null){
        session()->put(["filter"=>[$num,$num2]]);
    }

    public function getInfo($id){
        $team = Team::find($id);
        $this->emit("getInfo",[$team, $team->games]);
    }


    public function deleteTeam($id){
        $team = Team::firstWhere('id', $id);
        Storage::disk("public")->delete($team["logo"]);
        $tournaments = TournamentTeams::where("teams_id",$team->id)->get();
        $matches = Match::where("team1",$id)->orWhere("team2",$id)->orWhere("winner",$id)->get();
        foreach ($tournaments as $tournament){
            $tournament->delete();
        }
        foreach ($matches as $match){
            $match->delete();
        }

        $team->delete();
    }


    public function render()
    {
        $this->teams = Team::whereIn("status",session()->get("filter"))->where("title","like","%".$this->search."%")->orderBy('created_at', 'desc')->paginate(session()->get("limit"));
        return view('livewire.teams.team-list',["teams"=>$this->teams]);
    }
}
