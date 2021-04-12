<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UpdateProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_update_user()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

        $user = new User();
        $user->name = 'Mr Test';
        $user->email = 'admin@test.se';
        $user->password = Hash::make('666');
        $user->save();

        $response = $this
            ->followingRedirects()
            ->post('register', [
                'email'    => 'admin@test.se',
                'password' => '666',
            ]);

        $response = $this->get('/accountsettings');

        $user->name = 'Ms Best';
        $user->email = 'radmin@test.se';
        $user->password = Hash::make('123');
        $user->phone = '0701234567';
        $user->info = 'I am a dog walker!';
        $user->neighborhood = 'Nowhere Ville';
        $user->pet_walker = 'Yes';
        $user->pet_owner = 'No';
        $user->save();

        $response = $this->actingAs($user)
            ->post('edit-user', [
                'name'         => 'Ms Best',
                'email'        => 'radmin@test.se',
                'password'     => '123',
                'phone'        => '0701234567',
                'info'         => 'I am a dog walker!',
                'neighborhood' => 'Nowhere Ville',
                'pet-owner'    => '',
                'pet-walker'   => '',
            ]);

        // $response = $this
        //
        //     ->post('tasks', [
        //         'description' => 'Finish writing this test'
        //     ]);
        // $this->assertDatabaseHas('tasks', ['description' => 'Finish writing this test']);

        $response->assertStatus(200);

        // $response = $this->get('/dashboard');
    }
}
