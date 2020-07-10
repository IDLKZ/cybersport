<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class SavePhoto extends Model
{
    public static function savePhoto($img, $folder, $slug){
        $filename = Str::slug($slug) .".". $img->getClientOriginalExtension();
        if($img->storeAs($folder,$filename,"public")){
            return $folder.$filename;
        }
        else{
            return null;
        }
    }

    public static function updatePhoto($data){

        Storage::disk("public")->delete($data->team->logo);
        return self::savePhoto($data->logo,"upload/team/",$data->title);
    }



}
