<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_logout_user()
    {
        $user = User::factory()->create();
        $user->save();

        $response = $this->actingAs($user)->get('logout');

        $response = Auth::logout();

        $response = $this->get('/');
        $response->assertSeeText('Login');
    }
}
