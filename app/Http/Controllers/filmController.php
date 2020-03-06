<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\filmRequest;
use App\Film;

class filmController extends Controller
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
        if(Auth::user()->role->name == 'Admin')
        {
        $donnees = $request->validated();

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
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $unFilm = Film::findOrFail($id);
        $Critic = Film::find($id)->critic;
        return compact('unFilm','Critic');
    }

    public function search(Request $request)
    {
        $films;
        if($request->get('title') != NULL)
        {
            $films = Film::where('title','like','%'.$request->get('title').'%')->take(20)->get();
        }
        if($request->get('rating') != NULL)
        {
            $films = Film::where('rating','like','%'.$request->get('rating').'%')->take(20)->get();
        }
        if($request->get('min_length')!= NULL)
        {
            $films = Film::where('length','>=','%'.$request->get('min_length').'%')->take(20)->get();
        }
        if($request->get('max_length') != NULL)
        {
            $films = Film::where('length','<=','%'.$request->get('max_length').'%')->take(20)->get();
        }
        return compact('films');
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
        if(Auth::user()->role->name == 'Admin')
        {
        $film = \App\Film::findOrFail($id);
        $film->update($request->all());
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role->name == 'Admin'){
        $film = Film::find($id);
        $film->delete();
        var_dump($film);
        }
    }
}
