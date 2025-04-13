<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'en_name' => 'National',
                'bn_name' => 'জাতীয়',
                'slug' => 'national',
                'description' => '',
            ],
            [
                'en_name' => 'International',
                'bn_name' => 'আন্তর্জাতিক',
                'slug' => 'international',
                'description' => '',
            ],
            [
                'en_name' => 'Sports',
                'bn_name' => 'খেলা',
                'slug' => 'sports',
                'description' => '',
            ],
            [
                'en_name' => 'Entertainment',
                'bn_name' => 'বিনামূল্য',
                'slug' => 'entertainment',
                'description' => '',
            ],
            [
                'en_name' => 'Politics',
                'bn_name' => 'রাজনীতি',
                'slug' => 'politics',
                'description' => '',
            ],
            [
                'en_name' => 'Business',
                'bn_name' => 'অর্থনীতি',
                'slug' => 'business',
                'description' => '',
            ],
            [
                'en_name' => 'Bangladesh',
                'bn_name' => 'সারা দেশ',
                'slug' => 'bangladesh',
                'description' => '',
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
