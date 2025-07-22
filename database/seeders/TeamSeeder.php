<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    public function run()
    {
        DB::table('teams')->truncate();

        $teams = [
            [
                'name' => 'John Doe',
                'position' => 'CEO & Founder',
                'bio' => 'Over 10 years of experience in technology and digital business. Specializes in corporate strategy and business development.',
                'photo' => 'teams/team1.jpg',
                'facebook' => 'https://facebook.com/johndoe',
                'twitter' => 'https://twitter.com/johndoe',
                'linkedin' => 'https://linkedin.com/in/johndoe',
                'instagram' => 'https://instagram.com/johndoe',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Jane Smith',
                'position' => 'Chief Technology Officer',
                'bio' => 'Expert in system architecture and software development. Leads the technology team with clear and innovative vision.',
                'photo' => 'teams/team2.jpg',
                'facebook' => 'https://facebook.com/janesmith',
                'linkedin' => 'https://linkedin.com/in/janesmith',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Michael Johnson',
                'position' => 'Chief Marketing Officer',
                'bio' => 'Digital marketing specialist with expertise in branding strategies and company growth.',
                'photo' => 'teams/team3.jpg',
                'twitter' => 'https://twitter.com/michaeljohnson',
                'linkedin' => 'https://linkedin.com/in/michaeljohnson',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Sarah Williams',
                'position' => 'Head of Design',
                'bio' => 'Talented UI/UX designer with over 8 years of experience across various creative industries.',
                'photo' => 'teams/team4.jpg',
                'instagram' => 'https://instagram.com/sarahwilliams',
                'linkedin' => 'https://linkedin.com/in/sarahwilliams',
                'order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'David Brown',
                'position' => 'Senior Developer',
                'bio' => 'Full-stack developer with specialized expertise in Laravel, Vue.js, and distributed systems.',
                'photo' => 'teams/team5.jpg',
                'linkedin' => 'https://linkedin.com/in/davidbrown',
                'order' => 5,
                'is_active' => true,
            ],
            [
                'name' => 'Emily Davis',
                'position' => 'Product Manager',
                'bio' => 'Manages product life cycles from concept to launch with a focus on user experience.',
                'photo' => 'teams/team6.jpg',
                'twitter' => 'https://twitter.com/emilydavis',
                'linkedin' => 'https://linkedin.com/in/emilydavis',
                'order' => 6,
                'is_active' => true,
            ],
            [
                'name' => 'Robert Wilson',
                'position' => 'DevOps Engineer',
                'bio' => 'Specializes in deployment automation, system scalability, and cloud architecture.',
                'photo' => 'teams/team7.jpg',
                'linkedin' => 'https://linkedin.com/in/robertwilson',
                'order' => 7,
                'is_active' => true,
            ],
            [
                'name' => 'Jennifer Lee',
                'position' => 'Frontend Developer',
                'bio' => 'Expert in React, Vue.js, and responsive design with a focus on performance and accessibility.',
                'photo' => 'teams/team8.jpg',
                'twitter' => 'https://twitter.com/jenniferlee',
                'order' => 8,
                'is_active' => true,
            ],
            [
                'name' => 'Thomas Taylor',
                'position' => 'Backend Developer',
                'bio' => 'Specializes in API development, microservices, and database optimization.',
                'photo' => 'teams/team9.jpg',
                'order' => 9,
                'is_active' => true,
            ],
            [
                'name' => 'Jessica Martinez',
                'position' => 'HR Manager',
                'bio' => 'Manages human resources and company culture with a people-first approach.',
                'photo' => 'teams/team10.jpg',
                'linkedin' => 'https://linkedin.com/in/jessicamartinez',
                'order' => 10,
                'is_active' => true,
            ],
            [
                'name' => 'Daniel Anderson',
                'position' => 'Sales Director',
                'bio' => 'Leads the sales team with effective strategies and strong customer relationships.',
                'photo' => 'teams/team11.jpg',
                'linkedin' => 'https://linkedin.com/in/danielanderson',
                'order' => 11,
                'is_active' => true,
            ],
            [
                'name' => 'Lisa Thomas',
                'position' => 'Content Strategist',
                'bio' => 'Creates engaging content and effective brand storytelling strategies.',
                'photo' => 'teams/team12.jpg',
                'twitter' => 'https://twitter.com/lisathomas',
                'order' => 12,
                'is_active' => true,
            ],
            [
                'name' => 'Mark Jackson',
                'position' => 'QA Engineer',
                'bio' => 'Ensures product quality through thorough testing and test automation processes.',
                'photo' => 'teams/team13.jpg',
                'order' => 13,
                'is_active' => true,
            ],
            [
                'name' => 'Amanda White',
                'position' => 'UX Researcher',
                'bio' => 'Conducts user research to create products that truly meet customer needs.',
                'photo' => 'teams/team14.jpg',
                'linkedin' => 'https://linkedin.com/in/amandawhite',
                'order' => 14,
                'is_active' => true,
            ],
            [
                'name' => 'Kevin Harris',
                'position' => 'Mobile Developer',
                'bio' => 'Specializes in iOS and Android app development with a focus on high performance.',
                'photo' => 'teams/team15.jpg',
                'order' => 15,
                'is_active' => true,
            ],
            [
                'name' => 'Michelle Clark',
                'position' => 'Data Scientist',
                'bio' => 'Applies data analysis and machine learning to provide valuable business insights.',
                'photo' => 'teams/team16.jpg',
                'linkedin' => 'https://linkedin.com/in/michelleclark',
                'order' => 16,
                'is_active' => true,
            ],
            [
                'name' => 'Steven Lewis',
                'position' => 'System Architect',
                'bio' => 'Designs scalable and reliable systems to support company growth.',
                'photo' => 'teams/team17.jpg',
                'order' => 17,
                'is_active' => true,
            ],
            [
                'name' => 'Laura Walker',
                'position' => 'Customer Support Lead',
                'bio' => 'Ensures exceptional customer experience through responsive and solution-oriented support.',
                'photo' => 'teams/team18.jpg',
                'order' => 18,
                'is_active' => true,
            ],
            [
                'name' => 'Ryan Hall',
                'position' => 'Business Analyst',
                'bio' => 'Translates business needs into effective and efficient technical solutions.',
                'photo' => 'teams/team19.jpg',
                'linkedin' => 'https://linkedin.com/in/ryanhall',
                'order' => 19,
                'is_active' => true,
            ],
            [
                'name' => 'Nicole Young',
                'position' => 'Graphic Designer',
                'bio' => 'Creates strong visual identities and compelling designs for various media.',
                'photo' => 'teams/team20.jpg',
                'instagram' => 'https://instagram.com/nicoleyoung',
                'order' => 20,
                'is_active' => true,
            ],
            [
                'name' => 'Jason Allen',
                'position' => 'Security Specialist',
                'bio' => 'Ensures system and data security through industry best practices and continuous monitoring.',
                'photo' => 'teams/team21.jpg',
                'order' => 21,
                'is_active' => true,
            ],
            [
                'name' => 'Rachel King',
                'position' => 'Content Writer',
                'bio' => 'Creates engaging and informative content for various platforms and audiences.',
                'photo' => 'teams/team22.jpg',
                'twitter' => 'https://twitter.com/rachelking',
                'order' => 22,
                'is_active' => true,
            ],
            [
                'name' => 'Brian Scott',
                'position' => 'IT Support',
                'bio' => 'Provides quick and effective technical support for all company staff.',
                'photo' => 'teams/team23.jpg',
                'order' => 23,
                'is_active' => true,
            ],
            [
                'name' => 'Kimberly Green',
                'position' => 'Project Manager',
                'bio' => 'Manages projects from start to finish with focus on timely completion and budget adherence.',
                'photo' => 'teams/team24.jpg',
                'linkedin' => 'https://linkedin.com/in/kimberlygreen',
                'order' => 24,
                'is_active' => true,
            ],
            [
                'name' => 'Andrew Baker',
                'position' => 'Intern Developer',
                'bio' => 'Learning and contributing to web application development while pursuing computer science education.',
                'photo' => 'teams/team25.jpg',
                'order' => 25,
                'is_active' => true,
            ]
        ];

        foreach ($teams as $team) {
            Team::create($team);
        }
    }
}
