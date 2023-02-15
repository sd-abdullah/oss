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
        Category::factory()
        ->count(2)
        ->hasProducts(10)
        ->create();

        Category::factory()
        ->count(5)
        ->hasProducts(5)
        ->create();

        Category::factory()
        ->count(4)
        ->hasProducts(3)
        ->create();
    }
}
