<?php

namespace Database\Seeders;

use App\Models\Division;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $divisions = [
            [
                "en_name" => "Barishal",
                "bn_name" => "বরিশাল",
                'slug' => 'barishal',
                "lat" => "22.701002",
                "long" => "90.353451",
            ],
            [
                "en_name" => "Chattogram",
                "bn_name" => "চট্টগ্রাম",
                'slug' => 'chattogram',
                "lat" => "22.356851",
                "long" => "91.783182",
            ],
            [
                "en_name" => "Dhaka",
                "bn_name" => "ঢাকা",
                'slug' => 'dhaka',
                "lat" => "23.810332",
                "long" => "90.412518",
            ],
            [
                "en_name" => "Khulna",
                "bn_name" => "খুলনা",
                "slug" => "khulna",
                "lat" => "22.845641",
                "long" => "89.540328",
            ],
            [
                "en_name" => "Rajshahi",
                "bn_name" => "রাজশাহী",
                "slug" => "rajshahi",
                "lat" => "24.363589",
                "long" => "88.624135",
            ],
            [
                "en_name" => "Rangpur",
                "bn_name" => "রংপুর",
                "slug" => "rangpur",
                "lat" => "25.743892",
                "long" => "89.275227",
            ],
            [
                "en_name" => "Sylhet",
                "bn_name" => "সিলেট",
                "slug" => "sylhet",
                "lat" => "24.894929",
                "long" => "91.868706",
            ],
            [
                "en_name" => "Mymensingh",
                "bn_name" => "ময়মনসিংহ",
                "slug" => "mymensingh",
                "lat" => "24.747149",
                "long" => "90.420273",
            ],
        ];

        foreach ($divisions as $division) {
            Division::create($division);
        }
    }
}
