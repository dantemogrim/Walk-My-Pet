<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
<<<<<<< Updated upstream
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
=======
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
>>>>>>> Stashed changes
use Tests\TestCase;

class LogoutTest extends TestCase
{
<<<<<<< Updated upstream

    public function test_logout_user()
    {
        // Log in uawe
=======
    use RefreshDatabase;

    public function test_logout_user()
    {

        // Log in user
>>>>>>> Stashed changes
        $user = new User();
        $user->name = 'Mr Test';
        $user->email = 'admin@test.se';
        $user->password = Hash::make('666');
        $user->save();

<<<<<<< Updated upstream
        // Log out user
=======
        // Log in user
>>>>>>> Stashed changes
        $response = $this
            ->followingRedirects()
            ->post('login', [
                'email'    => 'admin@test.se',
                'password' => '666',
            ]);

<<<<<<< Updated upstream
=======

        $response = $this->get('logout');

        Auth::logout();

        $response = $this->get('/');



>>>>>>> Stashed changes
        $response->assertStatus(200);
    }
}
