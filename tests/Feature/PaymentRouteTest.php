<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class PaymentRouteTest extends TestCase
{
    use RefreshDatabase;

    // The old route took the amount to charge from the URL. Checkout is not implemented, so the route must not exist.
    public function test_payment_route_with_price_in_url_is_not_available(): void
    {
        $this->get('/payment/ticket/0.01')->assertNotFound();

        // A plain random password, hashed with the test configuration by the model cast
        $this->actingAs(User::factory()->create(['password' => Str::random(32)]))
            ->get('/payment/ticket/0.01')
            ->assertNotFound();
    }
}
