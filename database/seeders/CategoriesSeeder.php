<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'TEE SHIRTS']);
        Category::create(['name' => 'SHORTS & PANTS']);
        Category::create(['name' => 'HATS']);
        Category::create(['name' => 'BUSINESS CASUAL']);
        Category::create(['name' => 'SHOES']);
        Category::create(['name' => 'BEST SELLERS']);
    }
}
