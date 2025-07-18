<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Samael Medina',
            'email' => 'samaelortiz2218@gmail.com',
            'password' => bcrypt('2832882812'),
        ]);

        $this->call([
            CategorySeeder::class,
        ]);

        Product::factory(100)->create();
    }
}
