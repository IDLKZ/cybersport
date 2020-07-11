<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTournamentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournaments', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("title");
            $table->string("img")->nullable();
            $table->string("start")->nullable();
            $table->text("info")->nullable();
            $table->integer("status")->default(0);
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
        Schema::dropIfExists('tournaments');
    }
}
