<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use App\Projeto;
use Illuminate\Support\Facades\View;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::orderBy('created_at', 'desc')->paginate(10);
        return view('projetos.index',['projetos' => $projetos]);
    }
  
    public function departamento($departamento_id){
      
 
        $projetos = DB::table('projetos')->where('departamento_id', $departamento_id)->get();

     
         // return View::make('projetos.departamento',['projetos' => $projetos]);
         return View::make('projetos.departamento')->with('projetos', $projetos);
    }
    public function create()
    {
        return view('projetos.create');
    }
  
    public function store(Request $request)
    {
        $projeto = new Projeto;
        $projeto->titulo = $request->titulo;
        $projeto->apresentacao_do_problema = $request->apresentacao_do_problema;
        $projeto->estado_da_arte = $request->estado_da_arte;
        $projeto->justificativa_do_projeto = $request->justificativa_do_projeto;
        $projeto->objetivo = $request->objetivo;
        $projeto->metodo = $request->metodo;
        $projeto->cronograma = $request->cronograma;
        $projeto->departamento_id = $request->departamento_id;
        $projeto->users_id = $request->users_id;
        $projeto->ref_bibliograficas = $request->ref_bibliograficas;
        $projeto->save();
        return redirect()->route('projetos.index')->with('message', 'projeto created successfully!');
    }
  
    public function show($id)
    {
        $projeto = Projeto::find($id);

        // show the view and pass the nerd to it


        return View::make('projetos.show')->with('projeto', $projeto);
    }
  
    public function edit($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('projetos.edit',compact('projeto'));
    }
  
    public function update(Request $request, $id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->titulo = $request->titulo;
        $projeto->apresentacao_do_problema = $request->apresentacao_do_problema;
        $projeto->estado_da_arte = $request->estado_da_arte;
        $projeto->justificativa_do_projeto = $request->justificativa_do_projeto;
        $projeto->objetivo = $request->objetivo;
        $projeto->metodo = $request->metodo;
        $projeto->cronograma = $request->cronograma;
        $projeto->ref_bibliograficas = $request->ref_bibliograficas;
        $projeto->save();
        return redirect()->route('projetos.index')->with('message', 'projeto updated successfully!');
    }
  
    public function destroy($id)
    {
        $projeto = Projeto::findOrFail($id);
        $projeto->delete();
        return redirect()->route('projetos.index')->with('alert-success','projeto hasbeen deleted!');
    }

}