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
            $table->string('slug');
            $table->string('season', 40);
            $table->unsignedBigInteger('competition_id');
            $table->unsignedBigInteger('stadion_id');
            $table->unsignedBigInteger('home_team');
            $table->unsignedBigInteger('away_team');
            $table->integer('full_time_home_goal')->nullable();
            $table->integer('full_time_away_goal')->nullable();
            $table->date('fixture_match');
            $table->enum('full_time_result', ['W', 'D', 'L']);
            $table->string('status', 10);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('competition_id')->references('id')->on('competitions')->onDelete('cascade');
            $table->foreign('home_team')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('away_team')->references('id')->on('clubs')->onDelete('cascade');
            $table->foreign('stadion_id')->references('id')->on('stadions')->onDelete('cascade');
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
