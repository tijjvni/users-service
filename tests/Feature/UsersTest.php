<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsersTest extends TestCase
{
    use WithFaker;
    use RefreshDatabase;

    public function test_can_test(): void
    {
        $this->assertTrue(true);
    }

    public function test_can_post_users()
    {

        $data = [
            'email' => $this->faker->email,
            'firstName' => $this->faker->name,
            'lastName' => $this->faker->name
        ];


        $response =  $this->post(route('users.post'), $data);
        dd($response->json());
        // $response->assertSuccessful()
        // ->assertJson(['message' => 'User posted successfully.']);

        // $this->assertDatabaseHas('users', [
        //     'email' => $data['email'],
        // ]); 
    }
}
