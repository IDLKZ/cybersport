<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTossesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tosses', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->unsignedBigInteger("tournament_id");
            $table->unsignedBigInteger("step_id");
            $table->text("teams");
            $table->foreign("tournament_id")->references("id")->on("tournaments");
            $table->foreign("step_id")->references("id")->on("steps");
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
        Schema::dropIfExists('tosses');
    }
}
