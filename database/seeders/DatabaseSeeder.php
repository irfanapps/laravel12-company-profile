<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RolePermissionSeeder::class, // Ensure role make first
            UserSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            PricingSeeder::class,
            ProjectSeeder::class,
            ServiceSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            BlogCategorySeeder::class,
            BlogSeeder::class
        ]);
    }
}
