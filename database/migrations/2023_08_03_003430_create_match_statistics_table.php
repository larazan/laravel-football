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
        Schema::create('match_statistics', function (Blueprint $table) {
            $table->id();
            $table->string('season', 40);
            $table->integer('competition_id')->unsigned();
            $table->integer('match_id')->unsigned();
            $table->tinyInteger('home_possessoion')->default(0);
            $table->tinyInteger('home_offsides')->default(0);
            $table->tinyInteger('home_fouls')->default(0);
            $table->tinyInteger('home_total_shots')->default(0);
            $table->tinyInteger('home_shots_on_target')->default(0);
            $table->tinyInteger('home_corners')->default(0);
            $table->tinyInteger('home_passes')->default(0);
            $table->tinyInteger('home_crosses')->default(0);
            $table->tinyInteger('away_possessoion')->default(0);
            $table->tinyInteger('away_offsides')->default(0);
            $table->tinyInteger('away_fouls')->default(0);
            $table->tinyInteger('away_total_shots')->default(0);
            $table->tinyInteger('away_shots_on_target')->default(0);
            $table->tinyInteger('away_corners')->default(0);
            $table->tinyInteger('away_passes')->default(0);
            $table->tinyInteger('away_crosses')->default(0);
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('CASCADE');
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
        Schema::dropIfExists('match_statistics');
    }
};
