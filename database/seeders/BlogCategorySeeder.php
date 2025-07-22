<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Database\Seeder;

class BlogCategorySeeder extends Seeder
{
    public function run()
    {
        $blogs = Blog::all();
        $categories = Category::all();

        foreach ($blogs as $blog) {
            // Each blog gets 1-3 random categories
            $randomCategories = $categories->random(rand(1, 3))->pluck('id')->toArray();
            $blog->categories()->sync($randomCategories);
        }
    }
}
