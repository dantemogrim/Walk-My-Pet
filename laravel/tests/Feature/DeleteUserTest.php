<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

<<<<<<< Updated upstream
class RegisterTest extends TestCase
{
    use RefreshDatabase;

    public function delete_user()
=======
class DeleteUserTest extends TestCase
{
    use RefreshDatabase;

    public function test_delete_user()
>>>>>>> Stashed changes
    {
        $user = new User();
        $user->name = 'Mr Test';
        $user->email = 'admin@test.se';
        $user->password = Hash::make('666');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('register', [
                'email' => 'admin@test.se',
                'password' => '666',
            ]);

        $response->assertStatus(200);

        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email' => 'admin@test.se',
                'password' => '666',
            ]);

        $response = $this->get('/accountsettings');
        $response = $this->post('delete-user');
        $response = $this->get('/login');
    }
}
