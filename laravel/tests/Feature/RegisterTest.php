<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
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

        $response = $this->followingRedirects()
            ->post('register', [
                'name'       => 'Person Personson',
                'email'       => 'person@personson.com',
                'password'    => '123456789',
                'password-verify'    => '123456789',
            ]);


        $this->assertDatabaseHas('users', [
            'email' => 'person@personson.com'
        ]);

        $response->assertSeeText('Welcome');
    }
}
