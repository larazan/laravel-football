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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('season', 40);
            $table->integer('competition_id')->unsigned();
            $table->integer('stadion_id')->unsigned();
            $table->integer('home_team')->unsigned();
            $table->integer('away_team')->unsigned();
            $table->integer('full_time_home_goal')->nullable();
            $table->integer('full_time_away_goal')->nullable();
            $table->dateTime('fixture_match');
            $table->string('status', 10);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('CASCADE');
            $table->foreign('home_team')->references('id')->on('clubs')->onDelete('CASCADE');
            $table->foreign('away_team')->references('id')->on('clubs')->onDelete('CASCADE');
            $table->foreign('stadion_id')->references('id')->on('stadions')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
};
