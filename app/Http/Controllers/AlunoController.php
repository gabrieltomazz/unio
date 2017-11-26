<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Aluno;
use Illuminate\Support\Facades\View;


class AlunoController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->where('tipo_user_id', 1)->get();
        return view('alunos.index',['users' => $users]);
    }

    public function departamento($departamento_id){
  

        $users = DB::table('users')->where('departamento_id', $departamento_id)->where('tipo_user_id', 1)->get();
        // $users = DB::table('users')->where('departamento_id', $departamento_id)->get();


        // return View::make('projetos.departamento',['projetos' => $projetos]);
        return View::make('alunos.departamento')->with('users', $users);
    }

    public function getUsuario(){

        return view('alunos.usuario');

    }
  
}