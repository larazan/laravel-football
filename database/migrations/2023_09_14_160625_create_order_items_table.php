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
        Schema::create('order_items', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('order_id');
				$table->unsignedBigInteger('product_id');
				$table->integer('quantity')->default(1);
				$table->text('product_details')->default(null);
				$table->decimal('base_price', 16, 2)->default(0);
				$table->decimal('total_price', 16, 2)->default(0);
				$table->decimal('tax_amount', 16, 2)->default(1.00);
				$table->decimal('tax_percent', 16, 2)->default(0);
				$table->decimal('discount_amount', 16, 2)->default(0);
				$table->string('discount_type')->default('amount');
				$table->decimal('sub_total', 16, 2)->default(0);
                $table->string('attributes')->default(null);
				$table->timestamps();

				$table->foreign('order_id')->references('id')->on('orders');
				$table->foreign('product_id')->references('id')->on('products');
				$table->index('sku');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
};
