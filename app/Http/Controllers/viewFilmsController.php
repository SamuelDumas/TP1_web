<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;

class viewFilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Film::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donnees = $request->all();

        $unFilm = Film::create([ 
            'title' => $donnees['title'], 
            'release_year' => $donnees['release_year'],
            'length'=>  $donnees['length'],
            'description' => $donnees['description'],
            'rating' => $donnees['rating'],
            'language_id' => $donnees['language_id'],
            'special_features'=> $donnees['special_features'],
            'image'=> $donnees['image'],
            'created_at'=> $donnees['created_at']
          ]);

          return $unFilm;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unFilm = \App\Film::findOrFail($id);
        return compact('unFilm');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
