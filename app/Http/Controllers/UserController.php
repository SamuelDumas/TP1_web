<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
       // $donnees = $request->all();
        //$username = $donnees['username'];
       // $password = $donnees['password'];
        //$this->verifyRole($donnees);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::id()==$id){
        $user = User::findOrFail($id);
        return compact('user');
        }
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
        $user = \App\User::findOrFail($id);
        $user->update($request->all());
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
    public function verifyRole(array $donnees)
    {
        $username = $donnees['username'];
        $password = $donnees['password'];
        $msgErreur = null;
        if ( $username == NULL || $password == NULL )
	       $msgErreur = "Les paramètre n'ont pas été fourni avec la requête.";
        else
        {
            require("include/param-bd.inc");
        try {
            $connBD = new PDO("mysql:host=$dbHote; dbname=$dbNom", $dbUtilisateur, $dbMotPasse, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $connBD -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch (PDOException $e) {
            exit( "Erreur lors de la connexion à la BD :<br />\n" .  $e->getMessage() );
        }
        try {
            // Préparation et exécution de la requête SQL permettant d'obtenir l'information sur le professeur.
            $req = "SELECT role_id FROM users us WHERE users.login = $username AND users.password = $password";
            $prepReq = $connBD -> prepare($req);
            $prepReq -> execute();
            // Retourne chaque ligne de données dans un objet (sans classe).
            $prepReq -> setFetchMode(PDO::FETCH_OBJ);
        } catch (PDOException $e) {
            exit( "Erreur lors de l'exécution de la requête SQL :<br />\n" .  $e -> getMessage());
        }
        }
    }
}
