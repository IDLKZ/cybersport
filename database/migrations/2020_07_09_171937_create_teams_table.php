<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title")->unique();
            $table->string("email")->unique();
            $table->string("phone");
            $table->string("logo");
            $table->string("slug")->unique();
            $table->string("captain");
            $table->integer("status")->default(0);
            $table->text("info");
            $table->unsignedBigInteger("game_id");
            $table->foreign("game_id")->references("id")->on("games");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
