<?php

namespace App\Http\Livewire\Matches;

use App\Match;
use App\Step;
use App\Team;
use App\Tournament;
use Livewire\Component;

class MatchAdd extends Component
{

    public $tournament_id;
    public $step_id;
    public $team1;
    public $team2;
    public $winner;
    public $winners;
    public $result;
    public $info;
    public $start;
    public $teams;


    public function updated($field){

        $this->validateOnly($field,[
           "tournament_id"=>"required",
           "step_id"=>"required",
           "team1"=>"required|different:team2",
           "team2"=>"required|different:team1",
            'start' => 'required'
        ],[],['tournament_id'=>'турнир','step_id'=>'этап','team1'=>'первая команда', 'team2'=>'вторая команда', 'start' => 'начало турнира']);

    }



    public function submit(){
        $this->validate([
            "tournament_id"=>"required",
            "step_id"=>"required",
            "team1"=>"required|different:team2",
            "team2"=>"required|different:team1",
            'start'=>'required'
        ],[],['tournament_id'=>'турнир','step_id'=>'этап','team1'=>'первая команда', 'team2'=>'вторая команда', 'start' => 'начало турнира']);
        if (Match::saveMatch($this)){
            return redirect()->route('backend-matches');
        }
        else{
            abort(404);
        }
    }

    public function getTeam($id)
    {
        session(['id' => $id]);
        $tournament = Tournament::find($id);
        foreach ($tournament->tournament_teams as $tournament_team) {
            foreach ($tournament_team->teams as $team) {
                $this->teams[] = $team->toArray();
            }
        }


    }



    public function addTeam1($teamId, $title)
    {
        $this->winners['id1'] = $teamId;
        $this->winners['title1'] = $title;
    }

    public function addTeam2($id, $title)
    {
        $this->winners['id2'] = $id;
        $this->winners['title2'] = $title;
    }

    public function render()
    {

        $tournaments = Tournament::where("status",1)->get();
//        $teams = Team::all();
        $steps = Step::all();

        return view('livewire.matches.match-add',compact("tournaments","steps"));
    }
}
