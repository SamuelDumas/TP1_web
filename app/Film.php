<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title','release_year','length','description','rating','language_id','special_features','image','created_at'];

    public function critic(){
        return $this->hasMany('App\Critic');
    }

    public function actors()
{
    return $this->belongsToMany('App\Actor','film_actor','actor_id','film_id');
}}
