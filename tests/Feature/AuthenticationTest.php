<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_required_fields_for_registration()
    {
        $this->json('POST', 'api/register', ['Accept' => 'application/json'])
            ->assertStatus(422)
            ->assertJson([
                "message" => "The name field is required. (and 2 more errors)",
                "errors" => [
                    "name" => [ "The name field is required." ],
                    "email" => [ "The email field is required." ],
                    "password" => [ "The password field is required." ]
                ]
            ]);
    }

    public function test_password_confirmation()
    {
        $userData = [
            "name"     => "John Doe",
            "email"    => "doe@email.com",
            "password" => "password"
        ];

        $this->json('POST', 'api/register', $userData, ['Accept' => 'application/json'])
            ->assertStatus(422)
            ->assertJson([
                "message" => "The password confirmation does not match.",
                "errors" => [
                    "password" => [ "The password confirmation does not match."]
                ]
            ]);
    }

    public function test_successful_registration_user()
    {
        $userData = [
            "name"                  => "John Doe",
            "email"                 => "doe@email.com",
            "password"              => "password",
            "password_confirmation" => "password"
        ];

        $this->json('POST', 'api/register', $userData, ['Accept' => 'application/json'])
            ->assertStatus(201)
            ->assertJsonStructure([
                "data" => [
                    'id',
                    'name',
                    'email',
                ],
                "token"
            ]);
    }

    public function test_must_enter_email_and_password()
    {
        $this->json('POST', 'api/login')
            ->assertStatus(422)
            ->assertJson([
                "message" => "The email field is required. (and 1 more error)",
                "errors" => [
                    'email' => ["The email field is required."],
                    'password' => ["The password field is required."],
                ]
            ]);
    }

    public function test_successful_login()
    {
        User::factory()->create([
           'email' => 'sample@test.com',
           'password' => bcrypt('sample123'),
        ]);

        $loginData = ['email' => 'sample@test.com', 'password' => 'sample123'];

        $this->json('POST', 'api/login', $loginData, ['Accept' => 'application/json'])
            ->assertStatus(200)
            ->assertJsonStructure([
               "data" => [
                   'id',
                   'name',
                   'email',
               ],
                "token"
            ]);

        $this->assertAuthenticated();
    }
}
