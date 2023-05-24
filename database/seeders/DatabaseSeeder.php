<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(8)
            ->has(Category::factory()->count(5), 'childrenCategories')
            ->create();

        $categories = Category::select('id')->get()->pluck('id');
        foreach ($categories as $categoryId){
            Product::factory(5)
                ->create(['category_id' => $categoryId]);
        }

        Post::factory(5)->create();
    }
}
