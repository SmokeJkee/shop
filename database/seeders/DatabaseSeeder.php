<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(5)->create();
        $products = Product::factory(30)->create();
        $colors = Color::factory(5)->create();
        $tags = Tag::factory(2)->create();

        foreach ($products as $product) {
            $tagsIds = $tags->random()->pluck('id');
            $product->tags()->attach($tagsIds);
        }

        foreach ($products as $product) {
            $colorsIds = $colors->random()->pluck('id');
            $product->colors()->attach($colorsIds);
        }
    }
}
