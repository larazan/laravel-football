<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderItem>
 */
class OrderItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $id = [
            100001,
            100002,
            100003,
            100004,
            100005,
        ];

        $order_id = Str::of($id)->snake()->lower();

        return [
            'order_id' => $order_id, 
            'product_id' => random_int(1,5), 
            'quantity' => 1, 
            'product_details' => [], 
            'base_price' => 200000, 
            'total_price' => 200000, 
            'tax_amount' => 1.00, 
            'tax_percent' => 0, 
            'discount_amount' => 0, 
            'discount_type' => 'amount', 
            'sub_total' => 200000, 
            'attributes' => [],
        ];
    }
}
