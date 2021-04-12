<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_login_blade()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->followingRedirects()
            ->post('login', [
                'email'    => '$user->faker->unique()->safeEmail',
                'password' => '123456789',
            ]);

        $response->assertStatus(200);
    }

    public function test_login_user_without_password()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->followingRedirects()
            ->post('login', [
                'email' => '$user->faker->unique()->safeEmail',
            ]);

        $response->assertSeeText('Something went wrong. Please, try again.');
    }
}
