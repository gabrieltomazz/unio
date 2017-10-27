<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

   
    protected $fillable = [
        'cursos_id','tipo_user_id','universidade_id','name', 'email', 'password','biografia'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function tipoUser(){
        return $this->belongsTo(TipoUser::class);
    }

    public function curso(){
        return $this->belongsTo(Curso::class);
    }

    public function universidade(){
        return $this->belongsTo(Universidade::class);
    }

    public function departamento(){
        return $this->hasMany(Departamento::class);
    }
}
