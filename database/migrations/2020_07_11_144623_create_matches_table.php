<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("tournament_id");
            $table->unsignedBigInteger("step_id");
            $table->unsignedBigInteger("team1");
            $table->unsignedBigInteger("team2");
            $table->unsignedBigInteger("winner")->nullable();
            $table->string("start")->nullable();
            $table->foreign("tournament_id")->references("id")->on("tournaments");
            $table->foreign("step_id")->references("id")->on("steps");
            $table->foreign("team1")->references("id")->on("teams");
            $table->foreign("team2")->references("id")->on("teams");
            $table->foreign("winner")->references("id")->on("teams");
            $table->string("result")->nullable();
            $table->text("info")->nullable();
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
        Schema::dropIfExists('matches');
    }
}
