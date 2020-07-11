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

    public static function updatePhoto($oldImg, $newImg, $data,$folder){

        Storage::disk("public")->delete($oldImg);
        $img = self::savePhoto($newImg,$folder,$data->title);
        return $img;
    }



}
