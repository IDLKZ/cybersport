<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Tournament extends Model
{
    protected $table = "tournaments";


    public function games(){
        return $this->hasOne(Game::class, 'id', 'game_id');
    }

    public function tournament_teams(){
        return $this->hasMany(TournamentTeams::class,"tournaments_id","id");
    }

    public function matches(){
        return $this->hasMany(Match::class,"tournament_id","id");
    }

    public function tosses(){
        return $this->hasMany(Toss::class,"tournament_id","id");
    }

    public function teams()
    {
        return $this->hasMany(TournamentTeams::class, 'tournaments_id', 'id');
    }

    public static function saveTournament($request){
        $tournament = new self();
        $tournament->title = $request->title;
        $tournament->slug = Str::slug($request->title) . Str::random(5);
        $tournament->start = $request->start;
        $tournament->info = $request->info;
        $tournament->status = $request->status == true ? 1 : 0;
        $tournament->game_id = $request->game_id;
        $img = $request->img != null ? SavePhoto::savePhoto($request->img,"upload/tournaments/",$request->title) : null;
        $tournament->img = $img;
        return $tournament->save();

    }

    public static function updateTournament($tournament){
        $tournament->tournament->title = $tournament->title;
        $tournament->tournament->slug = Str::slug($tournament->title) . Str::random(5);
        $tournament->tournament->start = $tournament->start;
        $tournament->tournament->info = $tournament->info;
        $tournament->tournament->status = $tournament->status == true ? 1 : 0;
        $tournament->tournament->game_id = $tournament->game_id;
        if($tournament->img !== null){
            $img = SavePhoto::updatePhoto($tournament->tournament->img,$tournament->img,$tournament,"upload/tournaments/");
            if($img !== null){
                $tournament->tournament->img = $img;}
        }

        return $tournament->tournament->save();

    }
}
