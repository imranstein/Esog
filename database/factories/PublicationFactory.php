<?php

namespace Database\Factories;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Publication>
 */
class PublicationFactory extends Factory
{
    protected $model = Publication::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence(4, true),
            'tags' => $this->faker->sentence(4, true),
            'description' => $this->faker->paragraph(3, true),
            'image' => $this->faker->imageUrl(350, 500, 'books', false, null, false),
            'author' => $this->faker->name(),
            'document' => $this->faker->url(),
            'is_paid' => $this->faker->boolean,
        ];
    }
}
