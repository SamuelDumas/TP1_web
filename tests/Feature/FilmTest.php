<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FilmTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample1()
    {
        $response = $this->json('GET','/films/1',['id' => '1']);
        $response -> assertStatus(201)
                  -> assertJson(['created' => true]);
    }
    public function testStoreFilm()
    {

    }
}