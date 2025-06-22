<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Electronicos',
                'description' => 'Articulos electronicos'
            ],
            [
                'name' => 'Ropa',
                'description' => 'Articulos de ropa'
            ],
            [
                'name' => 'Joyeria',
                'description' => 'Articulos de joyeria'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
