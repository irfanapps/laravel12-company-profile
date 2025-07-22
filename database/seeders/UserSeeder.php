<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Get roles (ensure they exist)
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $editorRole = Role::firstOrCreate(['name' => 'editor', 'guard_name' => 'web']);
        $userRole = Role::firstOrCreate(['name' => 'user', 'guard_name' => 'web']);

        // 1. Create Admin User
        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@company.com',
            'password' => Hash::make('AdminPass123!'),
            'email_verified_at' => now(),
        ]);
        $admin->assignRole($adminRole);

        // 2. Create Editor User
        $editor = User::create([
            'name' => 'Content Editor',
            'email' => 'editor@company.com',
            'password' => Hash::make('EditorPass123!'),
            'email_verified_at' => now(),
        ]);
        $editor->assignRole($editorRole);

        // 3. Create Regular Users
        $regularUsers = [
            [
                'name' => 'John Doe',
                'email' => 'john@company.com',
                'password' => Hash::make('UserPass123!'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@company.com',
                'password' => Hash::make('UserPass123!'),
            ],
        ];

        foreach ($regularUsers as $userData) {
            $user = User::create([
                'name' => $userData['name'],
                'email' => $userData['email'],
                'password' => $userData['password'],
                'email_verified_at' => now(),
            ]);
            $user->assignRole($userRole);
        }

        // 4. Create additional random users
        User::factory()->count(25)->create()->each(function ($user) use ($userRole) {
            $user->assignRole($userRole);
        });
    }
}
