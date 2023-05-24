<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pathPicture = $this->faker->image(null, 400, 267);
        $path = Storage::disk('public')->putFile('products', new File($pathPicture));
        return [
            'name' => $this->faker->word(),
            'picture' => $path,
            'price' => $this->faker->randomFloat(2, 10, 2000)
        ];
    }
}
