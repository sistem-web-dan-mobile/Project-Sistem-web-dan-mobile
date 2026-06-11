<?php

namespace Tests\Feature;

use Tests\TestCase;

class FavoriteTest extends TestCase
{
    public function test_favorite_requires_authentication()
    {
        $response = $this->getJson('/api/v1/favorites');

        $response->assertStatus(401);
    }
}