<?php

namespace Tests\Feature;

use App\Models\Bilhete;
use Database\Seeders\AboutSeeder;
use Database\Seeders\BilheteSeeder;
use Database\Seeders\CategoryTableSeeder;
use Database\Seeders\MerchSeeder;
use Database\Seeders\RoteiroSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    // The public pages listed in the README
    public function test_public_pages_respond(): void
    {
        // The site content (not the user accounts), so the pages render real data
        $this->seed([AboutSeeder::class, BilheteSeeder::class, CategoryTableSeeder::class, MerchSeeder::class, RoteiroSeeder::class]);

        foreach (['/', '/roteiro', '/bilhetes', '/merch', '/articles', '/faq', '/contactos', '/privacidade', '/termos'] as $uri) {
            $this->get($uri)->assertOk();
        }

        // The tickets page lists the seeded tickets
        $this->get('/bilhetes')->assertSee(Bilhete::firstOrFail()->nome);
    }
}
