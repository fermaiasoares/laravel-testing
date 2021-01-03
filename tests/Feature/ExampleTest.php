<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class ExampleTest extends TestCase
{

    use WithFaker;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testUsersCreationEndPointTest()
    {
        $name = $this->faker->name();
        $email = $this->faker->email();
        $password = "minhasenha";

        $response = $this->postJson('/api/criarusuario', [
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'password_confirmation' => $password
        ]);

        $response
            ->assertStatus(201)
            ->assertExactJson([
                'message' => 'Successfully created user!'
            ]);
    }
}
