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
        Schema::table('schedules', function (Blueprint $table) {
            $table->string('hour', 3)->after('fixture_match')->nullable();
            $table->string('minute', 3)->after('hour')->nullable();
        });

        Schema::table('matchs', function (Blueprint $table) {
            $table->string('hour', 3)->after('fixture_match')->nullable();
            $table->string('minute', 3)->after('hour')->nullable();
        });

        Schema::table('settings', function (Blueprint $table) {
            $table->integer('pinned_club')->after('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('schedules', function (Blueprint $table) {
            //
        });
    }
};
