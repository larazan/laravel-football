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
        
        Schema::table('settings', function (Blueprint $table) {
            $table->integer('country')->after('instagram')->nullable();
            $table->string('timezone')->after('instagram')->nullable();
            $table->string('time_format')->after('instagram')->nullable();
            $table->integer('currency')->after('instagram')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
        });
    }
};
