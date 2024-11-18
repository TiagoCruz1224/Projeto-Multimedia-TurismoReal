<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $seeds = [
            BilheteSeeder::class,
            AboutSeeder::class,
            CategoryTableSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            MerchSeeder::class,
			RoteiroSeeder::class,
        ];
        
        $this->call($seeds);
    }
}
