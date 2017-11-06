<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CursoRequest;
use App\Curso;

class CursoController extends Controller
{
    

    public static function getListCursos(){
        return Curso::pluck('nome', 'id');
    }

    
}
