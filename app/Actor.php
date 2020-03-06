<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $fillable =['last_name','first_name','birthdate'];
}
