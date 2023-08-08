<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('match_lineups', function (Blueprint $table) {
            $table->id();
            $table->integer('match_id')->unsigned();
            $table->integer('home_player1')->nullable();
            $table->integer('home_player2')->nullable();
            $table->integer('home_player3')->nullable();
            $table->integer('home_player4')->nullable();
            $table->integer('home_player5')->nullable();
            $table->integer('home_player6')->nullable();
            $table->integer('home_player7')->nullable();
            $table->integer('home_player8')->nullable();
            $table->integer('home_player9')->nullable();
            $table->integer('home_player10')->nullable();
            $table->integer('home_player11')->nullable();
            $table->integer('home_player12')->nullable();
            $table->integer('home_player13')->nullable();
            $table->integer('home_player14')->nullable();
            $table->integer('home_player15')->nullable();
            $table->integer('home_player16')->nullable();
            $table->integer('away_player1')->nullable();
            $table->integer('away_player2')->nullable();
            $table->integer('away_player3')->nullable();
            $table->integer('away_player4')->nullable();
            $table->integer('away_player5')->nullable();
            $table->integer('away_player6')->nullable();
            $table->integer('away_player7')->nullable();
            $table->integer('away_player8')->nullable();
            $table->integer('away_player9')->nullable();
            $table->integer('away_player10')->nullable();
            $table->integer('away_player11')->nullable();
            $table->integer('away_player12')->nullable();
            $table->integer('away_player13')->nullable();
            $table->integer('away_player14')->nullable();
            $table->integer('away_player15')->nullable();
            $table->integer('away_player16')->nullable();
            $table->string('status', 10);
            $table->timestamps();

            $table->foreign('match_id')->references('id')->on('matchs')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('match_lineups');
    }
};
