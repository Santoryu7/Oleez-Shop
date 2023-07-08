<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->title(2),
            'price' => random_int(100, 100000),
            'description' => $this->faker->text,
            'count' => random_int(1, 1000),
            'image' => $this->faker->image('public/storage/images',640,480, null, false),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
