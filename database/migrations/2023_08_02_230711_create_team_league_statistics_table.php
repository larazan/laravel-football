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
        Schema::create('team_league_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('season', 40);
            $table->integer('team_id')->unsigned();
            $table->integer('total_points', 6)->default(0);
            $table->integer('total_goals', 6)->default(0);
            $table->integer('total_goalsreceived', 6)->default(0);
            $table->integer('total_goalsdiff', 6)->default(0);
            $table->integer('total_wins', 6)->default(0);
            $table->integer('total_draws', 6)->default(0);
            $table->integer('total_losses', 6)->default(0);
            $table->integer('home_points', 6)->default(0);
            $table->integer('home_goals', 6)->default(0);
            $table->integer('home_goalsreceived', 6)->default(0);
            $table->integer('home_goalsdiff', 6)->default(0);
            $table->integer('home_wins', 6)->default(0);
            $table->integer('home_draws', 6)->default(0);
            $table->integer('home_losses', 6)->default(0);
            $table->integer('away_points', 6)->default(0);
            $table->integer('away_goals', 6)->default(0);
            $table->integer('away_goalsreceived', 6)->default(0);
            $table->integer('away_goalsdiff', 6)->default(0);
            $table->integer('away_wins', 6)->default(0);
            $table->integer('away_draws', 6)->default(0);
            $table->integer('away_losses', 6)->default(0);
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('clubs')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_league_statistics');
    }
};
