<?php

namespace Tests\Feature;

use Tests\TestCase;

class MovieTest extends TestCase
{
    public function test_movie_search_requires_authentication()
    {
        $response = $this->getJson('/api/v1/movies/search?title=Batman');

        $response->assertStatus(401);
    }
}