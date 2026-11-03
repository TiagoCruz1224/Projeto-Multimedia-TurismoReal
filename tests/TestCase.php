<?php

namespace Tests;

use Database\Seeders\RoleSeeder;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    // Every new user gets the "regular" role from a listener, so tests that refresh the database seed the roles
    protected $seed = true;
    protected $seeder = RoleSeeder::class;

    protected function setUp(): void
    {
        parent::setUp();

        // The tests check responses, not assets, so they run without `npm run build`
        $this->withoutVite();
    }
}
