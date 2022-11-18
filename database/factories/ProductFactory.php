<?php

namespace Database\Factories;

use App\Models\Category;
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
        return [
            'title' => $this->faker->name,
            'description' => $this->faker->name,
            'content' => $this->faker->text,
            'preview_image' => $this->faker->imageUrl,
            'price' => random_int(100, 2000),
            'count' => random_int(1, 110),
            'is_published' => random_int(1,2),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
