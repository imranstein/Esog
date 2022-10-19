<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Team>
 */
class TeamFactory extends Factory
{
    protected $model = Team::class;

    public function definition()
    {

        return [
            'type' => $this->faker->randomElement(['Staff', 'Executive']),
            'designation' => $this->faker->jobTitle,
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            // 'image' => $this->faker->image(640, 480, 'people', true, 'Faker'),
            'image' => $this->faker->imageUrl( 500, 500, 'doctor', true, null, false),
            'facebook' => $this->faker->url,
            'twitter' => $this->faker->url,
            'linkedin' => $this->faker->url,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
