<?php

namespace App\Http\Livewire\Tournaments;

use App\Team;
use App\Tournament;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithPagination;

class TournamentsLists extends Component
{

    use WithPagination;
    protected  $tournaments;
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
        $tournament = Tournament::find($id);
        $this->emit("getInfo",[$tournament, $tournament->games]);
    }


    public function deleteTournament($id){
        $tournament = Tournament::firstWhere('id', $id);
        Storage::disk("public")->delete($tournament["img"]);
        $tournament->delete();
    }



    public function render()
    {
        $this->tournaments = Tournament::whereIn("status",session()->get("filter"))->where("title","like","%".$this->search."%")->orderBy('created_at', 'desc')->paginate(session()->get("limit"));
        return view('livewire.tournaments.tournaments-lists',["tournaments"=>$this->tournaments]);
    }
}
