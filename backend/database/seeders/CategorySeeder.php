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
                'name' => 'Phone',
                'icon' => 'phone'
            ],
            [
                'name' => 'Bag',
                'icon' => 'backpack'
            ],
            [
                'name' => 'ID Card',
                'icon' => 'id-card'
            ],
            [
                'name' => 'Books',
                'icon' => 'book'
            ],
            [
                'name' => 'Uniform',
                'icon' => 'shirt'
            ],
            [
                'name' => 'Keys',
                'icon' => 'key'
            ],
            [
                'name' => 'Jewelry',
                'icon' => 'gem'
            ],
            [
                'name' => 'Electronics',
                'icon' => 'laptop'
            ],
            [
                'name' => 'Others',
                'icon' => 'help-circle'
            ]
        ];
        foreach ($categories as $data) {
            Category::create([
                'name' => $data['name'],
                'icon' => $data['icon'],
            ]);
        }
    }
}
