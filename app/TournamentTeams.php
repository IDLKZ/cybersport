<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentTeams extends Model
{
    protected $table = 'tournament_teams';
    protected $fillable = ['tournaments_id', 'teams_id'];

    public function teams()
    {
        return $this->hasMany(Team::class, 'id', 'teams_id');
    }
}
