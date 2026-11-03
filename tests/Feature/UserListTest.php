<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserListTest extends TestCase
{
    use RefreshDatabase;

    public function test_logging_in_keeps_other_users_out_of_the_session(): void
    {
        $other = User::factory()->create();
        $user = User::factory()->create();

        $this->post('/login', ['email' => $user->email, 'password' => 'password']);

        $this->assertAuthenticatedAs($user);
        $session = serialize(session()->all());
        $this->assertStringNotContainsString($other->password, $session);
        $this->assertStringNotContainsString($other->email, $session);
    }

    public function test_admins_see_the_user_names_on_the_dashboard(): void
    {
        $admin = User::factory()->create();
        $admin->assignRole('admin');
        $other = User::factory()->create();

        $this->actingAs($admin)
            ->get('/dashboard')
            ->assertOk()
            ->assertSee($other->name)
            ->assertDontSee($other->email);
    }

    public function test_regular_users_do_not_see_the_user_list(): void
    {
        $user = User::factory()->create();
        $other = User::factory()->create();

        $this->actingAs($user)
            ->get('/dashboard')
            ->assertOk()
            ->assertDontSee($other->name);
    }
}
