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
        Schema::create('match_reports', function (Blueprint $table) {
            $table->id();
            $table->string('season', 40);
            $table->integer('competition_id')->unsigned();
            $table->integer('match_id')->unsigned();
            $table->text('report')->nullable();
            $table->string('original');
            $table->string('medium')->nullable();
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
        Schema::dropIfExists('match_reports');
    }
};
