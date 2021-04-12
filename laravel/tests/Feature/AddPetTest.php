<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AddPetTest extends TestCase
{
    use RefreshDatabase;

    public function test_add_pet()
    {

        $user = User::factory()->create();
        $user->save();

        $response = $this->get('/accountsettings');

        $pet = new Pet();
        $pet->owner_id = $user->id;
        $pet->name = 'Fido';
        $pet->info = 'Wants to go for walks on Mondays.';
        $pet->species = 'Dog';
        $pet->save();

        $response = $this->actingAs($user)->followingRedirects()
            ->post('add-pet', [
                'name'    => 'Fido',
                'info'    => 'Wants to go for walks on Tuesdays.',
                'species' => 'Dog',
            ]);

        $response->assertStatus(200);
    }
}
