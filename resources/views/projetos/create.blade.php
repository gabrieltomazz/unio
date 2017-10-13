
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link href="{{ asset('css/create_style.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">

<!-- <nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('projetos') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('projetos') }}">View All projetos</a></li>
        <li><a href="{{ URL::to('projetos/create') }}">Create a Project</a>
    </ul>
</nav> -->

<h1>Create a Project</h1>


<form class="" action="/projetos" method="POST">

        <fieldset>
          <label class="col-md-4 control-label">Título do Projeto</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input  name="titulo" placeholder="Título" class="form-control"  type="text" >
            </div>
          </div>
        </fieldset>

        <!-- Text input-->

        <fieldset>
          <label class="col-md-4 control-label" >Apresentação do Projeto</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <textarea name="apresentacao" class="form-control" rows="4" cols="50"></textarea>
            </div>
          </div>
        </fieldset>

         <fieldset>
          <label class="col-md-4 control-label" >Estado da arte</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <textarea name="estado-arte" class="form-control" rows="4" cols="50"></textarea>
            </div>
          </div>
        </fieldset>

         <fieldset>
          <label class="col-md-4 control-label" >Justificativa do Projeto</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <textarea name="justificativa" class="form-control" rows="4" cols="50"></textarea>
            </div>
          </div>
        </fieldset>

        <!-- Text input-->
        <fieldset>
          <label class="col-md-4 control-label">Objetivo</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
              <textarea name="objetivo" class="form-control" rows="4" cols="50"></textarea>
            </div>
          </div>
        </fieldset>


        <!-- Text input-->

        <fieldset>
          <label class="col-md-4 control-label">Método</label>  
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
              <textarea name="metodo" class="form-control" rows="4" cols="50"></textarea>
            </div>
          </div>
        </fieldset>

         <fieldset>
          <label class="col-md-4 control-label" >Cronograma</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <input name="cronograma" class="form-control"  type="text" ></input>
            </div>
          </div>
        </fieldset>

         <fieldset>
          <label class="col-md-4 control-label" >Referências Bibliográficas</label> 
          <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
              <textarea name="justificativa" class="form-control" rows="4" cols="50"></textarea>
            </div>
          </div>
        </fieldset>

        <!-- Button -->
        <div class="form-group">
          <label class="col-md-4 control-label"></label>
          <div class="col-md-4">
            <button type="submit" class="btn btn-warning" >Criar<span class="glyphicon glyphicon-send"></span></button>
          </div>
        </div>

      </fieldset>

  

</form>

</div>
</body>
</html>