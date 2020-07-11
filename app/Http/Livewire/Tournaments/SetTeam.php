<?php

namespace App\Http\Livewire\Tournaments;

use App\Team;
use App\TournamentTeams;
use Livewire\Component;

class SetTeam extends Component
{
    protected $listeners = ['setTeams'];
    public $tournament;
    public $teams;
    public $tima = [];

    public function setTeams($data)
    {
        $this->tournament = $data[0];
    }

    public function mount()
    {
        $this->teams = Team::where('status', 1)->get();
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
                if (!TournamentTeams::where(['teams_id' => $item, 'tournaments_id' => $this->tournament['id']])->first()){
                    TournamentTeams::create([
                        'tournaments_id' => $this->tournament['id'],
                        'teams_id' => $item
                    ]);
                }
            }
            return redirect()->route('backend-tournaments');
        }
    }

    public function render()
    {
        return view('livewire.tournaments.set-teams-tournaments');
    }
}
