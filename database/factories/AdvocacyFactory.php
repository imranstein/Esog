<?php

namespace Database\Factories;

use App\Models\Advocacy;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Advocacy>
 */
class AdvocacyFactory extends Factory
{
    protected $model = Advocacy::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'photo' => $this->faker->imageUrl(640, 480, 'people', true, 'Faker'),
            'document' => $this->faker->url(),
        ];
    }
}
