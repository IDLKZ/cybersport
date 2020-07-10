<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Team extends Model
{
    protected $table = "teams";
    protected $fillable = ["title","email","phone","secret_key","logo","slug","captain","status","info","game_id"];


    public static function saveTeam($request){
        $team = new self();
        $team->title = $request->title;
        $team->email = $request->email;
        $team->phone = $request->phone;
        $team->secret_key = $request->secret_key;
        $team->logo = SavePhoto::savePhoto($request->logo,"upload/team",$request->title);
        $team->slug = Str::slug($request->title);
        $team->captain = $request->captain;
        $team->status = 0;
        $team->info = $request->info;
        $team->game_id = $request->game_id;
        return $team->save();
    }


}
