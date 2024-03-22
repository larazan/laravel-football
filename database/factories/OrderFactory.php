<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
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
            'user_id' => random_int(3,5),
            'code' => $order_id, 
            'status' => 'created', 
            // 'opened' => $this->faker->sentence(), 
            // 'opened_cus' => $this->faker->sentence(), 
            'order_amount' => 1, 
            'order_date' => $this->faker->dateTime(), 
            'payment_due' => $this->faker->dateTime(), 
            // 'payment_status' => $this->faker->sentence(), unpaid
            // 'payment_token' => $this->faker->sentence(), 
            // 'payment_url' => $this->faker->sentence(), 
            'base_total_price' => 500000, 
            'tax_amount' => 50000, 
            'tax_percent' => 11.00, 
            // 'discount_amount' => $this->faker->sentence(), 
            // 'discount_percent' => $this->faker->sentence(), 
            'shipping_cost' => 50000, 
            'grand_total' => 550000, 
            'note' => $this->faker->words(5, true), 

            'customer_first_name' => $this->faker->firstName(), 
            'customer_last_name' => $this->faker->lastName(), 
            'customer_address1' => $this->faker->address(), 
            'customer_address2' => $this->faker->secondaryAddress(), 
            'customer_phone' => $this->faker->numerify('##########'), 
            'customer_email' => $this->faker->unique()->safeEmail(), 
            'customer_city_id' => random_int(1,10),
            'customer_province_id' => random_int(1,10),
            'customer_postcode' => $this->faker->postcode(), 
            'shipping_courier' => $this->faker->sentence(), 
            'shipping_service_name' => 'jne', 

            // 'approved_by' => $this->faker->sentence(), 
            // 'approved_at' => $this->faker->sentence(), 
            // 'confirmed_by' => $this->faker->sentence(), 
            // 'confirmed_at' => $this->faker->sentence(), 
            // 'payment_confirm_id' => $this->faker->sentence(), 
            // 'cancelled_by' => $this->faker->sentence(), 
            // 'cancelled_at' => $this->faker->sentence(), 
            // 'cancellation_note' => $this->faker->sentence(),
        ];
    }
}
