<?php

namespace App\Http\Controllers;
use App\Http\Requests\AlunoRequest;
use App\Aluno;

class AlunoController extends Controller
{
    public function index()
    {
        $alunos = Aluno::orderBy('created_at', 'desc')->paginate(10);
        return view('alunos.index',['alunos' => $alunos]);
    }
  
    public function create()
    {
        return view('alunos.create');
    }
  
    public function store(AlunoRequest $request)
    {
        dd($request);
        $aluno = new Aluno;
        $aluno->name        = $request->name;
        $aluno->matricula = $request->matricula;
        $aluno->password = $request->password;
        $aluno->save();
        return redirect()->route('alunos.index')->with('message', 'Aluno created successfully!');
    }
  
    public function show($id)
    {
        //
    }
  
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);
        return view('alunos.edit',compact('product'));
    }
  
    public function update(ProductRequest $request, $id)
    {
        $aluno = Product::findOrFail($id);
        $aluno->name        = $request->name;
        $aluno->matricula = $request->matricula;
        $aluno->password = $request->password;
        $aluno->save();
        return redirect()->route('alunos.index')->with('message', 'Product updated successfully!');
    }
  
    public function destroy($id)
    {
        $aluno = Aluno::findOrFail($id);
        $aluno->delete();
        return redirect()->route('alunos.index')->with('alert-success','Product hasbeen deleted!');
    }
}