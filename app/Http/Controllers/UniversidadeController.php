<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UniversidadeRequest;
use App\Universidade;

class UniversidadeController extends Controller
{
    public static function getUniversidades()
    {
        return Universidade::all();
    }

    public static function getListUniversidades()
    {
        return Universidade::pluck('nome', 'id');
    }

    

}
