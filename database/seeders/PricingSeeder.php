<?php

namespace Database\Seeders;

use App\Models\Pricing;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PricingSeeder extends Seeder
{
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic',
                'price' => 19.99,
                'period' => 'month',
                'description' => 'Perfect for small businesses',
                'features' => [
                    '5 Projects',
                    '10 GB Storage',
                    'Basic Support',
                    'Email Assistance'
                ],
                'is_featured' => false,
                'order' => 1
            ],
            [
                'name' => 'Professional',
                'price' => 49.99,
                'period' => 'month',
                'description' => 'Ideal for growing companies',
                'features' => [
                    'Unlimited Projects',
                    '50 GB Storage',
                    'Priority Support',
                    '24/7 Chat Assistance',
                    'Weekly Reports'
                ],
                'is_featured' => true,
                'order' => 2
            ],
            [
                'name' => 'Enterprise',
                'price' => 99.99,
                'period' => 'month',
                'description' => 'For large scale organizations',
                'features' => [
                    'Unlimited Projects',
                    '100 GB Storage',
                    'VIP Support',
                    '24/7 Phone Assistance',
                    'Dedicated Account Manager',
                    'Custom Reports'
                ],
                'is_featured' => false,
                'order' => 3
            ],
            [
                'name' => 'Annual Basic',
                'price' => 199.99,
                'period' => 'year',
                'description' => 'Save with annual billing',
                'features' => [
                    'All Basic features',
                    '2 months free'
                ],
                'is_featured' => false,
                'order' => 4
            ],
            [
                'name' => 'Starter',
                'price' => 9.99,
                'period' => 'month',
                'description' => 'For individuals and hobbyists',
                'features' => [
                    '2 Projects',
                    '5 GB Storage',
                    'Community Support'
                ],
                'is_featured' => false,
                'order' => 5
            ],
            [
                'name' => 'Premium',
                'price' => 79.99,
                'period' => 'month',
                'description' => 'Advanced features for professionals',
                'features' => [
                    '20 Projects',
                    '75 GB Storage',
                    'Priority Support',
                    'Daily Backups',
                    'Advanced Analytics'
                ],
                'is_featured' => false,
                'order' => 6
            ],
            [
                'name' => 'Lifetime',
                'price' => 999.99,
                'period' => 'one-time',
                'description' => 'One-time payment for lifetime access',
                'features' => [
                    'Unlimited Projects',
                    '500 GB Storage',
                    'VIP Support',
                    'Dedicated Server',
                    'White-label Options'
                ],
                'is_featured' => true,
                'order' => 7
            ]
        ];

        foreach ($plans as $plan) {
            Pricing::create([
                'name' => $plan['name'],
                'slug' => Str::slug($plan['name']),
                'price' => $plan['price'],
                'period' => $plan['period'],
                'description' => $plan['description'],
                'features' => $plan['features'],
                'is_featured' => $plan['is_featured'],
                'order' => $plan['order']
            ]);
        }
    }
}
