<?php

namespace App\Http\Livewire\Tournaments;

use App\Team;
use App\TournamentTeams;
use Livewire\Component;

class RemoveTeam extends Component
{
    public $tournament;
    public $teams;
    public $tima = [];


    public function mount($id)
    {
        $this->teams = TournamentTeams::where('tournaments_id', $id)->get();
        $this->tournament = $id;
    }

    public function tima($id)
    {
        if (array_key_exists($id, $this->tima)){
            unset($this->tima[$id]);
        } else{
            $this->tima[$id] = $id;
        }
    }

    public function submit()
    {
        if (count($this->tima) > 0){
            foreach ($this->tima as $item) {
                $team = TournamentTeams::where(['teams_id' => $item, 'tournaments_id' => $this->tournament])->first();
                if ($team){
                    $team->delete();
                }
            }
            return redirect()->route('backend-tournaments');
        }
    }

    public function render()
    {
        return view('livewire.tournaments.remove-teams-tournaments');
    }
}
