<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'TestAdmin',
            'email' => 'testAdmin@gmail.com',
            'password' => Hash::make('Admin1234'),
        ]);

        $admin->assignRole('admin');

		$user = User::create([
            'name' => 'TestUser',
            'email' => 'testUser@gmail.com',
            'password' => Hash::make('User1234'),
        ]);

        $user->assignRole('regular');
    }
}
