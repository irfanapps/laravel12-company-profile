<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Empty the table first
        DB::table('services')->truncate();

        $services = [
            [
                'title' => 'Web Development',
                'description' => 'We provide professional website development services using the latest technologies including Laravel, Vue.js, and Tailwind CSS.',
                'short_description' => 'Professional website development',
                'icon' => 'fas fa-code',
                'is_active' => true,
            ],
            [
                'title' => 'Mobile App Development',
                'description' => 'Mobile application development for iOS and Android platforms with optimal performance and stunning UI/UX.',
                'short_description' => 'iOS & Android mobile applications',
                'icon' => 'fas fa-mobile-alt',
                'is_active' => true,
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Comprehensive digital marketing strategies including SEO, SEM, social media marketing, and content marketing.',
                'short_description' => 'Digital marketing solutions',
                'icon' => 'fas fa-bullhorn',
                'is_active' => true,
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Intuitive user interfaces and engaging user experiences for your digital products.',
                'short_description' => 'Professional interface design',
                'icon' => 'fas fa-paint-brush',
                'is_active' => true,
            ],
            [
                'title' => 'Cloud Solutions',
                'description' => 'Cloud computing services including migration, management, and optimization of cloud infrastructure for your business.',
                'short_description' => 'Cloud infrastructure solutions',
                'icon' => 'fas fa-cloud',
                'is_active' => true,
            ],
            [
                'title' => 'IT Consulting',
                'description' => 'Information technology consulting to help your business make the right IT decisions.',
                'short_description' => 'IT strategy consulting',
                'icon' => 'fas fa-laptop-code',
                'is_active' => false,
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                'title' => $service['title'],
                'slug' => Str::slug($service['title']),
                'description' => $service['description'],
                'short_description' => $service['short_description'],
                'icon' => $service['icon'],
                'is_active' => $service['is_active'],
                'image' => 'services/service-' . Str::slug($service['title']) . '.jpg', // Example image path
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        $faker = Faker::create('en_US');

        for ($i = 0; $i < 10; $i++) {
            $title = $faker->sentence(3);

            Service::create([
                'title' => $title,
                'slug' => Str::slug($title), // Generate slug from title
                'description' => $faker->paragraphs(3, true),
                'short_description' => $faker->sentence,
                'icon' => 'fas fa-' . $faker->randomElement(['code', 'mobile', 'chart-line', 'palette', 'database', 'server', 'globe', 'robot']),
                'is_active' => $faker->boolean(90), // 90% chance active
                'image' => 'services/service-' . $faker->unique()->numberBetween(1, 20) . '.jpg',
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);
        }
    }
}
