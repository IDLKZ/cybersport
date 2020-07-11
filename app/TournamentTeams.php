<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TournamentTeams extends Model
{
    protected $table = 'tournament_teams';
    protected $fillable = ['tournaments_id', 'teams_id'];
}
