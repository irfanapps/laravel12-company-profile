<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TestimonialSeeder extends Seeder
{
    public function run()
    {
        $positions = [
            'CEO',
            'CTO',
            'Marketing Director',
            'Product Manager',
            'Software Engineer',
            'UX Designer',
            'Sales Manager',
            'Founder',
            'HR Manager',
            'Content Creator'
        ];

        $companies = [
            'TechCorp',
            'InnoSoft',
            'Digital Solutions',
            'WebCraft',
            'ByteSize',
            'PixelPerfect',
            'CodeWave',
            'DataSphere',
            'CloudNine',
            'FutureTech'
        ];

        $contents = [
            "This product completely transformed our workflow. Highly recommended!",
            "Excellent service and support. Will definitely use again.",
            "The team went above and beyond to meet our requirements.",
            "Impressed with the quality and attention to detail.",
            "Game changer for our business operations.",
            "Reliable and efficient solution for our needs.",
            "Outstanding results in a short timeframe.",
            "Professional team with great communication.",
            "Exceeded all our expectations. Truly remarkable.",
            "The best decision we made for our company.",
            "Innovative approach with tangible results.",
            "Consistently delivers on promises.",
            "Transformed our online presence completely.",
            "Worth every penny. Excellent ROI.",
            "Friendly and knowledgeable team.",
            "Solved our problems quickly and effectively.",
            "Highly skilled professionals.",
            "Cutting-edge technology implementation.",
            "Streamlined our processes beautifully.",
            "Responsive and adaptable to our needs."
        ];

        for ($i = 1; $i <= 25; $i++) {
            $isFeatured = $i % 5 === 0; // Every 5th testimonial is featured

            Testimonial::create([
                'name' => fake()->name(),
                'position' => fake()->randomElement($positions),
                'company' => fake()->randomElement($companies),
                'content' => fake()->randomElement($contents),
                'rating' => rand(4, 5), // Most testimonials are 4-5 stars
                'avatar' => $this->getRandomAvatar($i),
                'is_featured' => $isFeatured,
                'order' => $i
            ]);
        }
    }

    private function getRandomAvatar($index)
    {
        $gender = $index % 2 === 0 ? 'men' : 'women';
        $avatarNumber = $index % 50 + 1; // Using 50 different avatars
        return "https://randomuser.me/api/portraits/{$gender}/{$avatarNumber}.jpg";
    }
}
