<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'place_id'        => 1, // \App\Models\Place::factory()->create()->id,
            'category_id'     => \App\Models\Category::factory()->create()->id,
            'name'            => $this->faker->name,
            'slug'            => Str::slug($this->faker->name),
            'image'           => $this->faker->image('/tmp', 640, 480, null, false),
            'description'     => $this->faker->text(50),
            'price'           => 10000,
        ];
    }
}
