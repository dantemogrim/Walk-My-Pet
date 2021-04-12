<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateProfileTest extends TestCase
{
    use RefreshDatabase;

    public function test_update_user()
    {
        $user = User::factory()->create();
        $user->save();

        $response = $this->actingAs($user)
            ->followingRedirects()
            ->post('edit-user', [
                'name'         => 'Person Personson',
                'email'        => 'person@personson.com',
                'password'     => '123456789',
                'phone'        => '0701234567',
                'info'         => 'I am a dog walker!',
                'neighborhood' => 'The hip area',
                'pet-owner'    => 'Yes',
                'pet-walker'   => 'No',
            ]);

        $response->assertStatus(200);
        $response = $this->get('/dashboard');
    }
}
