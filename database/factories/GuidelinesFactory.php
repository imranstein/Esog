<?php

namespace Database\Factories;

use App\Models\Guidelines;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Guidelines>
 */
class GuidelinesFactory extends Factory
{
    protected $model = Guidelines::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'document' => $this->faker->url(),
        ];
    }
}
