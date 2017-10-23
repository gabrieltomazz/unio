<?php 
use App\Http\Controllers\UniversidadeController;
// $universidades = UniversidadeController::getUniversidades();
$universidades = UniversidadeController::getListUniversidades()?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo asset('css/welcome.css')?>">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <title></title>
</head>

<body>

  @include('base.navbar')
  <div id = "fundo">

    <div class="row vertical-offset-100">

      <div class="centro">
        <div> 
          <h1>Unio</h1>
          <h3>Integrando alunos e professores</h3>

          
          <div class="form-group"  id ="form-control-universidade">
              {{ Form::select('universidade_id', $universidades, Input::old('Universidade'), array('class' => 'form-control')) }}

          </div>

          <select  id = "form-control" class="form-control">
            <option>Aluno</option>
            <option>Professor</option>
          </select>
          {{ Form::close() }}  

        </div>

        <button id= "botao-entrar" type="button" class="btn btn-primary btn-lg">Entrar</button>

      </div>



    </div>

  </div>

  
</body>

</html>



