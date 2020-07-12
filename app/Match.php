<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function tournaments(){
       return $this->hasOne(Tournament::class,"id","tournament_id");
    }
    public function steps(){
       return $this->hasOne(Step::class,"id","step_id");
    }
    public function teams1(){
       return $this->hasOne(Team::class,"id","team1");
    }
    public function teams2(){
       return $this->hasOne(Team::class,"id","team2");
    }
    public function winners(){
       return $this->hasOne(Team::class,"id","winner")->withDefault(function ($model){
           $model->title = 'Неизвестно';
       });
    }


    public static function saveMatch($data){
        $match = new self();
        $match->tournament_id = $data->tournament_id;
        $match->step_id = $data->step_id;
        $match->team1 = $data->team1;
        $match->team2 = $data->team2;
        $match->winner = $data->winner;
        $match->start = $data->start;
        $match->result = $data->result;
        $match->info = $data->info;
        return $match->save();

    }

    public static function updateMatch($data){

        $data->match->tournament_id = $data->tournament_id;
        $data->match->step_id = $data->step_id;
        $data->match->team1 = $data->team1;
        $data->match->team2 = $data->team2;
        $data->match->winner = $data->winner;
        $data->match->start = $data->start;
        $data->match->result = $data->result;
        $data->match->info = $data->info;
        return $data->match->save();

    }
}
