<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(5, true),
            'description' => $this->faker->paragraph(3, true),
            'image' => $this->faker->imageUrl(800, 500, 'Hospital', false, null, false),
            'caption' => $this->faker->sentence(6, true),
            'created_by' => $this->faker->name(),

        ];
    }
}
