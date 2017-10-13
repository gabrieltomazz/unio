<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $fillable = ["titulo","apresentacao_do_problema","estado_da_arte","justificativa_do_projeto","objetivo","metodo","cronograma","ref_bibliograficas"];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'projetos';
}
