<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class LogoutTest extends TestCase
{
    use RefreshDatabase;

    public function test_logout_user()
    {

        // Log in user
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


        $response = $this->get('logout');

        Auth::logout();

        $response = $this->get('/');



        $response->assertStatus(200);
    }
}
