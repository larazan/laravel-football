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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->integer('competition_id')->unsigned();
            $table->string('season', 40);
            $table->integer('match_id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->integer('minute_play')->nullable();
            $table->integer('goals')->nullable();
            $table->integer('assists')->nullable();
            $table->integer('subs_on')->nullable();
            $table->integer('subs_off')->nullable();
            $table->integer('yellow_card')->nullable();
            $table->integer('red_card')->nullable();
            $table->string('status', 10);
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('CASCADE');
            $table->foreign('match_id')->references('id')->on('matchs')->onDelete('CASCADE');
            $table->foreign('player_id')->references('id')->on('players')->onDelete('CASCADE');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistics');
    }
};
