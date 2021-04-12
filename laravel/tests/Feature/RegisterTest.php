<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;

    // Check /register url.
    public function test_view_register_blade()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }

    // Check register form.
    public function test_register_user_form()
    {
        $user = User::factory()->create();
        $user->save();

        $response = $this->actingAs($user)->followingRedirects()
            ->post('register', [
                'email'    => '$user->faker->unique()->safeEmail',
                'password'    => '123456789',
            ]);

        $response->assertSeeText('Welcome');
    }
}
