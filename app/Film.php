<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'release_year','length','description','rating', 'language_id','special_features','image', 'created_at'];
}
