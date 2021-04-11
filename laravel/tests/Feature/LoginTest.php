<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class LoginTest extends TestCase
{
    use RefreshDatabase;

    public function test_view_login_form()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function test_login_user()
    {
        $user = new User();
        $user->name = 'Mr Test';
        $user->email = 'admin@test.se';
        $user->password = Hash::make('666');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email'    => 'admin@test.se',
                'password' => '666',
            ]);

        $response->assertSeeText('');
    }

    public function test_login_user_without_password()
    {
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'admin@test.se',
            ]);

        $response->assertSeeText('Something went wrong. Please, try again.');
    }
}
