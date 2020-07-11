<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Team extends Model
{
    protected $table = "teams";
    protected $fillable = ["title","email","phone","secret_key","logo","slug","captain","status","info","game_id"];

    public function games(){
        return $this->hasOne(Game::class, 'id', 'game_id');
    }


    public static function saveTeam($request){
        $team = new self();
        $team->title = $request->title;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->secret_key = $request->secret_key;
        $logo = !is_null($request->logo) ? SavePhoto::savePhoto($request->logo,"upload/team/",$request->title) : null;
        $team->logo = $logo;
        $team->slug = Str::slug($request->title);
        $team->captain = $request->captain;
        if(isset($request->status)){
            $team->status = $request->status == true ? 1 : 0;
        }
        else{
            $team->status = 0;
        }
        $team->info = !is_null($request->info) ? $request->info : null;
        $team->game_id = $request->game_id;
        return $team->save();
    }


    public static function updateTeam($team){

        $team->team->title = $team->title;
        $team->team->email = $team->email;
        $team->team->phone = $team->phone;
        $team->team->secret_key = $team->secret_key;
        $logo = !is_null($team->logo) ? SavePhoto::updatePhoto($team->team->logo,$team->logo,$team,"uploads/team/") : $team->team->logo;
        $team->team->logo = $logo;
        $team->team->slug = Str::slug($team->title);
        $team->team->captain = $team->captain;
        $team->team->status = $team->status == true ? 1 : 0;
        $team->team->info = $team->info;
        $team->team->game_id = $team->game_id;
        return $team->team->save();
    }


}
