<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projeto;

class ProjetoController extends Controller
{
    public function index()
    {
        $projetos = Projeto::orderBy('created_at', 'desc')->paginate(10);
        return view('projetos.index',['projetos' => $projetos]);
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
		$projeto->ref_bibliograficas = $request->ref_bibliograficas;
        $projeto->save();
        return redirect()->route('projetos.index')->with('message', 'projeto created successfully!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $projeto = Projeto::findOrFail($id);
        return view('projetos.edit',compact('projeto'));
    }
  
    public function update(ProjetoRequest $request, $id)
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