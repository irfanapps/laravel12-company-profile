<?php
// database/seeders/BlogSeeder.php
namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    public function run()
    {
        // Make admin
        $admin = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password')
        ]);

        // Make Category
        $categories = Category::factory(5)->create();

        // Make blog
        Blog::factory(20)->create(['user_id' => $admin->id])
            ->each(function ($blog) use ($categories) {
                $blog->categories()->attach(
                    $categories->random(rand(1, 3))->pluck('id')->toArray()
                );
            });
    }
}
