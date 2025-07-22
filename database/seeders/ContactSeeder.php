<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ContactSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create('id_ID');

        // Dummy data
        $contacts = [];

        for ($i = 1; $i <= 10; $i++) {
            $contacts[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'message' => $faker->paragraph(3),
                'is_read' => $faker->boolean(70), // 70% kemungkinan sudah dibaca
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ];
        }

        // Insert data to database
        DB::table('contacts')->insert($contacts);

        $this->command->info('Contact data seeded successfully! Generated ' . count($contacts) . ' contacts.');
    }
}
