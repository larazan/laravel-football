<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_faq_id' => random_int(1,5),
            'question' => $this->faker->sentence(),
            'answer' => $this->faker->paragraphs(2, true),
            'status' => 'active',
        ];
    }
}
