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
            'email' => env('SEED_ADMIN_EMAIL', 'admin@example.com'),
            'password' => Hash::make($this->requiredEnv('SEED_ADMIN_PASSWORD')),
        ]);

        // Every new user gets "regular" on creation; the admin keeps only "admin"
        $admin->syncRoles('admin');

        $user = User::create([
            'name' => 'TestUser',
            'email' => env('SEED_USER_EMAIL', 'user@example.com'),
            'password' => Hash::make($this->requiredEnv('SEED_USER_PASSWORD')),
        ]);

        $user->assignRole('regular');
    }

    // Seeded passwords come from the environment so no credential lives in the repository
    private function requiredEnv(string $name): string
    {
        $value = env($name);
        if (!is_string($value) || $value === '') {
            throw new \RuntimeException("Set $name in .env before seeding.");
        }

        return $value;
    }
}
