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
    public function testGetFilm()
    {
        $films = factory(Film::class, 3)->create();
        $response = $this->get('/api/films');
        $response->assertStatus(200);
        $this->assertDatabaseHas(
            'films',
            ['title' => $films[0]->title]
        );
    }

    public function testUpdateFilm()
    {
        $response = $this->putJson(
            '/api/films/update',
            [
                "id" => 1,
                "title"=> "qqchose",
                "release_year" =>"2019-08-09",
                "length"=>"120",
                "description"=>"test",
                "rating"=>"2",
                "language_id"=>"1",
                "special_features"=>"",
                "image"=>"1",
                "created_at"=>"2020-02-07"
            ]);
        $response->assertStatus(200);
    }
    public function testStoreFilm()
    {

    }
}