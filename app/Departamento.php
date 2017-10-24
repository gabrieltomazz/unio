<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{	
	protected $table = "";
    
    protected $fillable = [
        'nome','id_universidade','id_users',
    ];
}
