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
        Schema::create('matchs', function (Blueprint $table) {
            $table->id();
            $table->string('season', 40);
            $table->integer('competition_id')->unsigned();
            $table->integer('home_team')->unsigned();
            $table->integer('away_team')->unsigned();
            $table->integer('score_home_team');
            $table->integer('score_away_team');
            $table->date('fixture_date');
            $table->dateTime('fixture_time');
            $table->enum('final_result', ['W', 'D', 'L']);
            $table->string('status', 10);
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('CASCADE');
            $table->foreign('home_team')->references('id')->on('clubs')->onDelete('CASCADE');
            $table->foreign('away_team')->references('id')->on('clubs')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matchs');
    }
};
