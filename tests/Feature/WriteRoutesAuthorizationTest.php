<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Str;
use Tests\TestCase;

class WriteRoutesAuthorizationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guests_cannot_create_articles(): void
    {
        $this->post('/articles/create', ['title' => 'Spam', 'article_text' => 'Posted without an account'])
            ->assertRedirect(route('login'));

        $this->assertDatabaseCount('articles', 0);
    }

    public function test_regular_users_cannot_write_users_in_the_admin_panel(): void
    {
        $regular = $this->createUser();
        $victim = $this->createUser();

        $this->actingAs($regular, 'backpack')
            ->postJson('/admin/user', ['name' => 'New', 'email' => 'new@example.com', 'password' => Str::random(16)])
            ->assertUnauthorized();
        $this->actingAs($regular, 'backpack')
            ->putJson('/admin/user/'.$victim->id, ['name' => 'Renamed'])
            ->assertUnauthorized();
        $this->actingAs($regular, 'backpack')
            ->deleteJson('/admin/user/'.$victim->id)
            ->assertUnauthorized();

        $this->assertDatabaseHas('users', ['id' => $victim->id, 'name' => $victim->name]);
        $this->assertDatabaseMissing('users', ['email' => 'new@example.com']);
    }

    public function test_admins_can_still_delete_users_in_the_admin_panel(): void
    {
        $admin = $this->createUser();
        $admin->assignRole('admin');
        $other = $this->createUser();

        $this->actingAs($admin, 'backpack')
            ->deleteJson('/admin/user/'.$other->id)
            ->assertOk();

        $this->assertDatabaseMissing('users', ['id' => $other->id]);
    }

    private function createUser(): User
    {
        // A plain random password, hashed with the test configuration by the model cast
        return User::factory()->create(['password' => Str::random(32)]);
    }
}
