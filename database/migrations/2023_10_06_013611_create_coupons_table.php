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
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('code')->nullable();
            $table->date('start_date')->nullable();
            $table->date('expire_date')->nullable();
            $table->float('min_purchase', 24, 2)->default(0.00);
            $table->float('max_discount', 24, 2)->default(0.00);
            $table->float('discount', 24, 2)->default(0.00);
            $table->string('discount_type')->default('percentage');
            $table->string('coupon_type')->default('default');
            $table->integer('limit')->nullable();
            $table->string('status', 10);
            $table->string('data')->nullable();
            $table->bigInteger('total_uses')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coupons');
    }
};
