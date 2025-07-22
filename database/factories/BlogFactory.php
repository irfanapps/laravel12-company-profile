<?php
// database/factories/BlogFactory.php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'excerpt' => $this->faker->paragraph,
            'content' => $this->faker->text(2000),
            'is_published' => $this->faker->boolean,
            'published_at' => $this->faker->optional()->dateTimeThisYear,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
