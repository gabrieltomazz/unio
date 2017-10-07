<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends User
{
    protected $fillable = ['matricula'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'alunos';
}
