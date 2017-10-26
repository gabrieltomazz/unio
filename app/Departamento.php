<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{	
	protected $table = "departamentos";
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $fillable = [
        'nome','id_universidade','id_users'
    ];

     public function projeto(){
        return $this->hasMany(Projeto::class);
    }
}
