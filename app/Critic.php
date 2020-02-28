<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Critic extends Model
{
    protected $fillable = ['user_id','film_id','score','comment','created_at','updated_at'];
}
