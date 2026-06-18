<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Favorite;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FavoriteTest extends TestCase
{
    use RefreshDatabase;

    public function test_favorite_requires_authentication()
    {
        $response = $this->getJson('/api/v1/favorites');

        $response->assertStatus(401);
    }

    public function test_user_can_add_favorite()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $response = $this->postJson('/api/v1/favorites', [
            'imdb_id' => 'tt0372784',
            'title' => 'Batman Begins',
            'poster' => 'poster.jpg',
            'year' => '2005'
        ]);

        $response->assertStatus(201);

        $this->assertDatabaseHas('favorites', [
            'imdb_id' => 'tt0372784'
        ]);
    }

    public function test_user_can_view_favorites()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        Favorite::create([
            'user_id' => $user->id,
            'imdb_id' => 'tt0372784',
            'title' => 'Batman Begins',
            'poster' => 'poster.jpg',
            'year' => '2005'
        ]);

        $response = $this->getJson('/api/v1/favorites');

        $response->assertStatus(200);
    }

    public function test_user_can_delete_favorite()
    {
        $user = User::factory()->create();

        Sanctum::actingAs($user);

        $favorite = Favorite::create([
            'user_id' => $user->id,
            'imdb_id' => 'tt0372784',
            'title' => 'Batman Begins',
            'poster' => 'poster.jpg',
            'year' => '2005'
        ]);

        $response = $this->deleteJson(
            "/api/v1/favorites/{$favorite->id}"
        );

        $response->assertStatus(200);
    }
}