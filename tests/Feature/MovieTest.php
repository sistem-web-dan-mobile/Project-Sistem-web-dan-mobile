<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MovieTest extends TestCase
{
    use RefreshDatabase;

    public function test_movie_search_requires_authentication()
    {
        $response = $this->getJson('/api/v1/movies/search?title=Batman');

        $response->assertStatus(401);
    }

    public function test_authenticated_user_can_search_movie()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/v1/movies/search?title=Batman');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'status',
                     'data'
                 ]);
    }

    public function test_movie_search_requires_title()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/v1/movies/search');

        $response->assertStatus(422);
    }

    public function test_authenticated_user_can_get_movie_detail()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->getJson('/api/v1/movies/tt0372784');

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'status',
                     'data'
                 ]);
    }
}