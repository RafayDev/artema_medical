<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subCategoriesForCategories = [
            1 => [
                'Scalpels', 'Scissors', 'Forceps', 'Artery Forceps', 'Cotton Swab Forceps', 
                'Retractors', 'Probes, Applicators, Spatulas', 'Diagnostics', 
                'Trocars, Suction Tubes, Cannulas', 'Anaesthesia', 'Suture', 'Dressings', 
                'Bone Surgery', 'Cardiovascular / Neuro', 'Neurosurgery', 'Tracheotomy', 
                'Dermatology', 'Stomach, Intestines, Rectum', 'Urology', 'Gynecology', 
                'Obstetrics', 'Calipers', 'Otology', 'Rhinology', 'Tonsillectomy, Laryngo-Bronchoscopy', 
                'Hygiene, Storage', 'Oral Maxillo-Facial Surgery', 'Cranio-Maxillo-Facial Surgery', 
                'Asepsis', 'Needle holders', 'Extracting Forceps', 'Dental Elevators', 'Dental And Oral Surgery'
            ],
            2 => [
                'Orthopedic'
            ],
            3 => [
                'Podiatry'
            ],
            4 => [
                'Scissors'
            ],
            5 => [
                'Dental'
            ],
            6 => [
                'ENT'
            ],
            7 => [
                'Cardiovascular'
            ],
            8 => [
                'Gynaecology'
            ],
            9 => [
                'Plastic Surgery'
            ],
            10 => [
                'Needle Holders'
            ],
            11 => [
                'Gynae set'
            ]
        ];

        foreach ($subCategoriesForCategories as $categoryId => $subCategories) {
            foreach ($subCategories as $subCategory) {
                SubCategory::create([
                    'sub_category_name' => $subCategory,
                    'sub_category_slug' => strtolower(str_replace(' ', '-', $subCategory)),
                    'category_id' => $categoryId
                ]);
            }
        }
    }
}
