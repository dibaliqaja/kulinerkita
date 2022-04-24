<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Place>
 */
class PlaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->name,
            'description'     => $this->faker->text(50),
            'sub_district_id' => 2,
            'address'         => $this->faker->address,
            'phone'           => $this->faker->phoneNumber(),
            'image'           => $this->faker->image('/tmp', 640, 480, null, false),
            'latitude'        => $this->faker->latitude,
            'longitude'       => $this->faker->longitude
        ];
    }
}
