<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DeleteUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->followingRedirects()
            ->post('delete-user', ['delete-check' => 'delete-input']);

        $response = $this->assertDatabaseMissing('users', ['name' => $user->name]);

        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
