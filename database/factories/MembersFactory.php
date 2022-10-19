<?php

namespace Database\Factories;

use App\Models\Members;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Model>
 */
class MembersFactory extends Factory
{
    protected $model = Members::class;

    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'department' => $this->faker->jobTitle,
            'designation' => $this->faker->jobTitle,
            'workplace' => $this->faker->company,
            'photo' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
        ];
    }
}
