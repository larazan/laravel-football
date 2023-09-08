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
        Schema::table('match_statistics', function (Blueprint $table) {
            $table->tinyInteger('home_pass_accuracy')->after('home_passes')->default(0);
            $table->tinyInteger('home_yellow_cards')->after('home_crosses')->default(0);
            $table->tinyInteger('home_red_cards')->after('home_yellow_cards')->default(0);

            $table->tinyInteger('away_pass_accuracy')->after('away_passes')->default(0);
            $table->tinyInteger('away_yellow_cards')->after('away_crosses')->default(0);
            $table->tinyInteger('away_red_cards')->after('away_yellow_cards')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('match_statistics', function (Blueprint $table) {
            //
        });
    }
};
