<?php 
use App\Http\Controllers\UniversidadeController;
// $universidades = UniversidadeController::getUniversidades();
$universidades = UniversidadeController::getListUniversidades()?>

@extends('base.layout')

@section('header')

  <link rel="stylesheet" href="<?php echo asset('css/welcome.css')?>">

@endsecion

@section('content')
  @include('base.navbar')
  

  <div class="row vertical-offset-100">
    <div id="textintro" class="col-md-9 col-md-offset-2">
        <h1>Unio</h1>
        <h3>Integrando alunos e professores</h3>
    </div>
      
    <div class="centro">
        <!-- <h4> Podemos começar?</h4> -->
        <div id="inputs_welcome">
          <div class="form-group"  id ="form-control-universidade">
              {{ Form::select('universidade_id', $universidades, Input::old('Universidade'), array('class' => 'form-control')) }}
          </div>

          <select  id = "form-control" class="form-control">
            <option valeu="1">Aluno</option>
            <option valeu="2">Professor</option>
          </select>

          <button  type="button" class="button" >
            <span>Entrar</span>
          </button>
        </div>
        {{ Form::close() }}  
      
    </div>
  </div>

  <script type="text/javascript">
    

    
  </script>

@endsection





