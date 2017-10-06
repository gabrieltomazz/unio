<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['name','matricula', 'senha'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $hidden = ['senha'];
    protected $table = 'alunos';
}
