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
            $table->unsignedBigInteger('team_id');
            $table->integer('total_points')->default(0);
            $table->integer('total_goals')->default(0);
            $table->integer('total_goalsreceived')->default(0);
            $table->integer('total_goalsdiff')->default(0);
            $table->integer('total_wins')->default(0);
            $table->integer('total_draws')->default(0);
            $table->integer('total_losses')->default(0);
            $table->integer('home_points')->default(0);
            $table->integer('home_goals')->default(0);
            $table->integer('home_goalsreceived')->default(0);
            $table->integer('home_goalsdiff')->default(0);
            $table->integer('home_wins')->default(0);
            $table->integer('home_draws')->default(0);
            $table->integer('home_losses')->default(0);
            $table->integer('away_points')->default(0);
            $table->integer('away_goals')->default(0);
            $table->integer('away_goalsreceived')->default(0);
            $table->integer('away_goalsdiff')->default(0);
            $table->integer('away_wins')->default(0);
            $table->integer('away_draws')->default(0);
            $table->integer('away_losses')->default(0);
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('clubs')->onDelete('cascade');
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
