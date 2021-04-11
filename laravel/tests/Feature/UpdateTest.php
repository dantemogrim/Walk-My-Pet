<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UpdateTest extends TestCase
{

    public function test_UpdateUser()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
