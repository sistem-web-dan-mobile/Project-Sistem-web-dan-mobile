<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthTest extends TestCase
{
    public function test_register_endpoint_exists()
    {
        $response = $this->postJson('/api/v1/register', []);

        $response->assertStatus(422);
    }
}