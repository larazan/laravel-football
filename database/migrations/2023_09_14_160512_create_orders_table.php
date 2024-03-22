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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique();
			$table->unsignedBigInteger('user_id');
			$table->integer('opened')->default(0);
            $table->integer('opened_cus')->default(0);
			$table->float('order_amount', 24,2)->default(0.00);
			$table->string('payment_status')->default('unpaid');
			$table->string('order_status',50)->default('pending');
			$table->string('payment_method',100)->nullable();
			$table->string('coupon_code')->nullable();
			$table->datetime('order_date');
			$table->datetime('payment_due');
			$table->text('note')->nullable();
			$table->string('order_type')->default('delivery');
			$table->string('payment_token')->nullable();
			$table->string('payment_url')->nullable();

			$table->decimal('base_total_price', 16, 2)->default(0.00);
			$table->decimal('total_tax_amount', 24, 2)->default(0.00);
			$table->decimal('tax_percent', 16, 2)->default(0.00);
			$table->decimal('discount_amount', 16, 2)->default(0.00);
			$table->decimal('discount_percent', 16, 2)->default(0);
			$table->decimal('shipping_cost', 16, 2)->default(0);
			$table->decimal('grand_total', 16, 2)->default(0);
			
			$table->string('customer_first_name');
			$table->string('customer_last_name');
			$table->string('customer_address1')->nullable();
			$table->string('customer_address2')->nullable();
			$table->string('customer_phone')->nullable();
			$table->string('customer_email')->nullable();
			$table->string('customer_city_id')->nullable();
			$table->string('customer_province_id')->nullable();
			$table->integer('customer_postcode')->nullable();
			$table->string('shipping_courier')->nullable();
			$table->string('shipping_service_name')->nullable();

			$table->unsignedBigInteger('approved_by')->nullable();
			$table->datetime('approved_at')->nullable();
			$table->unsignedBigInteger('confirmed_by')->nullable();
			$table->datetime('confirmed_at')->nullable();
            $table->unsignedBigInteger('payment_confirm_id')->nullable();
			$table->unsignedBigInteger('cancelled_by')->nullable();
			$table->datetime('cancelled_at')->nullable();
			$table->text('cancellation_note')->nullable();
			$table->boolean('checked')->default(0);
			$table->string('status');
			$table->softDeletes();
			$table->timestamps();

			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('approved_by')->references('id')->on('users');
			$table->foreign('cancelled_by')->references('id')->on('users');
			$table->index('code');
			$table->index(['code', 'order_date']);
			$table->index('payment_token');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
