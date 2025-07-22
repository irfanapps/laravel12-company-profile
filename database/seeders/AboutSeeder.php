<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AboutSeeder extends Seeder
{
    public function run()
    {
        // Erase old image 
        Storage::deleteDirectory('public/about');

        // make new directory
        Storage::makeDirectory('public/about');

        // Data about
        $abouts = [
            [
                'title' => 'About Our Company',
                'content' => 'We are a leading technology company dedicated to providing innovative solutions to our clients. Founded in 2010, we have grown from a small team to an organization with over 200 employees spread across 5 countries.',
                'image' => 'about-image.jpg',
                'mission' => 'To deliver the best technological solutions that enhance business efficiency and daily life, with a commitment to quality and sustainable innovation.',
                'vision' => 'To become a global leader in providing transformative technology solutions that shape the digital future.',
                'values' => json_encode([
                    'Integrity: We always act honestly and ethically',
                    'Innovation: We continually seek new ways to solve problems',
                    'Collaboration: We believe teamwork yields the best solutions',
                    'Customer Satisfaction: Our success is measured by our clients\' success',
                    'Social Responsibility: We contribute to the communities where we operate'
                ]),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        // Salin example image to storage
        $imagePath = public_path('seeders/about-image.jpg');
        if (file_exists($imagePath)) {
            Storage::putFileAs('public/about', $imagePath, 'about-image.jpg');
        }

        // Insert data to database
        DB::table('abouts')->insert($abouts);

        $this->command->info('About data seeded successfully!');
    }
}
