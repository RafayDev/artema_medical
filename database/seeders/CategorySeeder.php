<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'GENERAL INSTRUMENTATION',
            'ORTHOPEDIC INSTRUMENTS',
            'PODIARTY INSTRUMENTS',
            'SCISSORS',
            'DENTAL INSTRUMENTS',
            'ENT INSTRUMENTS',
            'CARDIOVASCULAR',
            'GYNAECOLOGY',
            'PLASTIC SURGERY',
            'NEEDLE HOLDERS',
            'SURGICAL SETS',
        ];

        foreach ($categories as $category) {
            Category::create([
                'category_name' => $category,
                'category_slug' => strtolower(str_replace(' ', '-', $category))
            ]);
        }
    }
}
