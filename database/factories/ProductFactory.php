<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $randId = Str::random(18);
        $title = $this->faker->words(4, true);
        $slug = Str::slug($title) . '_' . $randId;

        $images = [
            'uploads/products/original/product1_1654755434.png',
            'uploads/products/original/product2_1657165991.png',
            'uploads/products/original/product6_1657179332.png',
            'uploads/products/original/product7_1657179438.png',
            'uploads/products/original/product10_1657179512.png',
            'uploads/products/original/product11_1657179602.png',
            'uploads/products/original/product12_1657179938.jpg',
        ];

        $image = Str::of($images)->snake()->lower();
        
        return [
            'rand_id' => $randId, 
            'parent_id' => null, 
            'user_id' => random_int(1,5), 
            'sku' => 'SK'.$this->faker->numerify('###'), 
            'type' => 'simple', 
            'name' => $title, 
            'slug' => $slug, 
            'price' => 200000, 
            'discount' => null, 
            'weight' => 1000, 
            'width' => 1, 
            'height' => 1, 
            'length' => 1, 
            'short_description' => $this->faker->words(8, true), 
            'description' => $this->faker->paragraph(), 
            'status' => 1,
        ];
    }
}


