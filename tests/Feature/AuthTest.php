<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_can_register()
    {
        $response = $this->postJson('/api/v1/register', [
            'name' => 'Mutiah',
            'email' => 'mutiah@test.com',
            'password' => 'password123'
        ]);

        $response->assertStatus(201)
                 ->assertJson([
                     'status' => 'success'
                 ]);

        $this->assertDatabaseHas('users', [
            'email' => 'mutiah@test.com'
        ]);
    }

    public function test_register_fails_when_email_exists()
    {
        User::factory()->create([
            'email' => 'mutiah@test.com'
        ]);

        $response = $this->postJson('/api/v1/register', [
            'name' => 'Mutiah',
            'email' => 'mutiah@test.com',
            'password' => 'password123'
        ]);

        $response->assertStatus(422);
    }

    public function test_user_can_login()
    {
        $user = User::factory()->create([
            'password' => bcrypt('password123')
        ]);

        $response = $this->postJson('/api/v1/login', [
            'email' => $user->email,
            'password' => 'password123'
        ]);

        $response->assertStatus(200)
                 ->assertJsonStructure([
                     'status',
                     'token'
                 ]);
    }
}