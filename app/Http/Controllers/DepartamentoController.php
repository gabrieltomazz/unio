<?php

namespace App\Http\Controllers;

use Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DepartamentoRequest;
use App\Departamento;

class DepartamentoController extends Controller
{
    public static function getDepartamentos()
    {
        return Departamento::all();
    }

    public static function getListDepartamentos()
    {
        return Departamento::pluck('nome', 'id');
    }

    

}
