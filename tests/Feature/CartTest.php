<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class CartTest extends TestCase
{
    use RefreshDatabase;

    public function test_adding_an_empty_item_is_a_validation_error(): void
    {
        $this->actingAs($this->createUser())
            ->post('/cart', [])
            ->assertRedirect()
            ->assertSessionHasErrors(['id', 'name', 'price', 'qnt']);
    }

    public function test_a_valid_item_is_added(): void
    {
        $this->actingAs($this->createUser())
            ->post('/cart', ['id' => 1, 'name' => 'Ticket', 'price' => '12.50', 'qnt' => 2, 'img' => '/images/ticket.jpg'])
            ->assertSessionHasNoErrors()
            ->assertRedirect(route('cart.list'));
    }

    private function createUser(): User
    {
        return User::factory()->create(['password' => Str::random(32)]);
    }
}
