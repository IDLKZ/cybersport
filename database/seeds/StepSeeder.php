<?php

use Illuminate\Database\Seeder;

class StepSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["title"=>"Групповой этап","teams"=>5],
            ["title"=>"1/16","teams"=>32],
            ["title"=>"1/8","teams"=>16],
            ["title"=>"1/4","teams"=>8],
            ["title"=>"1/2","teams"=>4],
            ["title"=>"Финал","teams"=>2],
        ];
         foreach ( $data as $item){
             \App\Step::create([
               "title"=>$item["title"],
               "teams"=>$item["teams"],
             ]);
         }

    }
}
