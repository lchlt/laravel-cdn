<?php

namespace Database\Factories;

use Illuminate\Http\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pathPicture = $this->faker->image(null, 400, 267);
        $path = Storage::disk('public')->putFile('categories', new File($pathPicture));
        return [
            'name' => $this->faker->word(),
            'picture' => $path
        ];
    }
}
