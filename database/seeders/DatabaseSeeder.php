<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use App\database\seeders\RolesSeeder;
// use App\database\seeders\UsersSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesSeeder::class,
            UsersSeeder::class,


        ]);
    }
}
