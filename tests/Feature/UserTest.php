<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testGetUser()
    {
        $user = factory(User::class, 1)->create();
        $response = $this->get('/api/users');
        $response->assertStatus(200);
    }

    public function testUpdateFilm()
    {
        $response = $this->putJson(
            '/api/users/update',
            [
                "login"=> "qqchose",
                "password" =>"12345678",
                "email"=>"qqchose@gmail.com",
                "last_name"=>"last_name",
                "first_name"=>"first_name",
                "role_id"=>"1",
            ]);
        $response->assertStatus(200);
    }
}
