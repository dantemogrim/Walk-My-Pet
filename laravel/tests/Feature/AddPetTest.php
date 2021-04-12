<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Pet;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class AddPetTest extends TestCase
{
    use RefreshDatabase;

<<<<<<< Updated upstream
    public function add_pet_test()
=======
    public function test_add_pet()
>>>>>>> Stashed changes
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

<<<<<<< Updated upstream
=======
        $response = $this->get('/accountsettings');

>>>>>>> Stashed changes
        $pet = new Pet();
        $pet->owner_id = Auth::id();
        $pet->name = 'Fido';
        $pet->info = 'A very good boy';
        $pet->species = 'dog';
        $pet->save();

        $response = $this->followingRedirects()
            ->post('add-pet', [
                'name' => 'Fido',
                'info' => 'A very good boy',
                'species' => 'dog'
            ]);

        $response->assertStatus(200);
    }
}
