<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => 1,
            'user_id' => 1,
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->unique()->slug(),
            'rand_id' => Str::random(10),
            'published_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'published' => true,
            'status' => 'active',
            'body' => $this->faker->paragraphs(3, true),
            'article_tags' => 'news, test, first',
            'meta_title' => $this->faker->sentence(),
            'meta_keyword' => $this->faker->words(5, true),
            'meta_description' => $this->faker->unique()->word,
        ];
    }
}
