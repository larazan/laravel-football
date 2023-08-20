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
        Schema::create('staffs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('club_id');
            $table->string('name');
            $table->string('slug');
            $table->string('role');
            $table->date('birth_date')->nullable();
            $table->string('birth_location')->nullable();
            $table->string('nationality')->nullable();
            $table->text('bio')->nullable();
            $table->date('contract_from')->nullable();
            $table->date('contract_until')->nullable();
            $table->string('original');
            $table->string('medium')->nullable();
            $table->string('small')->nullable();
            $table->string('status',10);
            $table->timestamps();

            $table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
};
