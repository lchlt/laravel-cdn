<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pathPicture = $this->faker->image(null, 400, 267);
        $path = Storage::disk('public')->putFile('posts', new File($pathPicture));
        return [
            'title' => $this->faker->words($this->faker->numberBetween(2, 5), true),
            'excerpt' => $this->faker->realText(250),
            'picture' => $path,
        ];
    }
}
