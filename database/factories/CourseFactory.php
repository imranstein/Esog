<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'tags' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'author' => $this->faker->name,
            'document' => $this->faker->url(),
            'video' => $this->faker->url(),
            'is_paid' => $this->faker->boolean,
        ];
    }
}
