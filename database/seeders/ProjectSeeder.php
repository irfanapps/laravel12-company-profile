<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('en_us');

        // Variation data
        $projectTypes = [
            'Website',
            'Mobile Application',
            'ERP System',
            'E-Commerce',
            'Landing Page',
            'Company Profile',
            'Admin Dashboard',
            'API Service',
            'Custom CMS',
            'POS Application',
            'Inventory System',
            'LMS Platform',
            'HR Application',
            'Ticketing System',
            'Marketplace'
        ];

        // Company
        $clientCompanies = [
            'PT ABC Digital',
            'CV Maju Jaya',
            'UD Sejahtera',
            'Online Store 123',
            'PT Technology Solutions',
            'CV Independent Works',
            'PT Nusantara Jaya',
            'Sari Rasa Restaurant',
            'Sehat Bahagia Clinic',
            'PT Global Investama',
            'CV Eternal Blessings',
            'PT Creative Synergy',
            'Smart Tutoring',
            'Grand Melati Hotel',
            'PT Fast Logistics'
        ];

        for ($i = 1; $i <= 25; $i++) {
            $title = $faker->randomElement($projectTypes) . ' ' . $faker->company;
            $startDate = $faker->dateTimeBetween('-2 years', 'now');
            $endDate = $faker->optional(0.7)->dateTimeBetween($startDate, '+1 year'); // 70% have end date

            Project::create([
                'title' => $title,
                'slug' => Str::slug($title),
                'description' => $this->generateProjectDescription($faker),
                'client_name' => $faker->name,
                'client_company' => $faker->optional(0.8)->randomElement($clientCompanies), // 80% have company
                'start_date' => $startDate,
                'end_date' => $endDate,
                'project_url' => $faker->optional(0.6)->url, // 60% have URL
                'cover_image' => 'projects/project-' . $faker->numberBetween(1, 10) . '.jpg',
                'gallery' => $this->generateGalleryImages($faker),
                'is_featured' => $faker->boolean(30), // 30% chance featured
                'is_active' => $faker->boolean(90), // 90% chance active
                'view_count' => $faker->numberBetween(50, 1000),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now'),
            ]);
        }
    }

    /**
     * Generate realistic project description
     */
    protected function generateProjectDescription($faker)
    {
        $descriptions = [
            "This project involved developing a {$faker->randomElement(['responsive website', 'mobile application', 'integrated system'])} " .
                "to {$faker->randomElement(['improve productivity', 'expand market reach', 'enhance user experience'])}. " .
                "Built using {$faker->randomElement(['Laravel, Vue.js, and MySQL', 'React Native for cross-platform', 'Node.js and MongoDB'])} technology.",

            "A {$faker->randomElement(['custom', 'integrated', 'cloud-based'])} solution designed for " .
                "{$faker->randomElement(['retail companies', 'educational institutions', 'small and medium businesses'])}. " .
                "Key features include {$faker->randomElement(['inventory management', 'real-time analytics', 'online payment system'])}.",

            "A {$faker->randomElement(['digital', 'centralized', 'automated'])} platform for " .
                "{$faker->randomElement(['content management', 'performance tracking', 'team collaboration'])}. " .
                "Developed using the {$faker->randomElement(['agile', 'design thinking', 'lean startup'])} approach.",

            "A {$faker->randomElement(['web-based', 'mobile-first', 'progressive web'])} application that " .
                "{$faker->randomElement(['simplifies business processes', 'connects customers with services', 'provides data analysis'])}. " .
                "Equipped with {$faker->randomElement(['admin dashboard', 'integrated API', 'notification system'])}."
        ];

        return $faker->randomElement($descriptions);
    }

    /**
     * Generate gallery images array
     */
    protected function generateGalleryImages($faker)
    {
        $galleryCount = $faker->numberBetween(0, 5); // 0-5 gallery images
        $gallery = [];

        for ($i = 0; $i < $galleryCount; $i++) {
            $gallery[] = 'projects/gallery/project-' . $faker->numberBetween(1, 20) . '.jpg';
        }

        return $galleryCount > 0 ? $gallery : null;
    }
}
