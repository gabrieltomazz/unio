<?php use App\Http\Controllers\DepartamentoController;
// $universidades = UniversidadeController::getUniversidades();
$departamentos = DepartamentoController::getListDepartamentos();
$departamentos = (object)$departamentos; 

?>


@extends('base.layout')


@section('header')
  <title></title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 

  <link rel="stylesheet" href="<?php echo asset('css/index.css')?>"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  </script>
@endsection

@section('content')
  <div id="wrapper">
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
          <li class="sidebar-brand"> <a href="#">Start Bootstrap</a> </li>
          <li>  <a href="#">Dashboard</a>  </li>
          <li>  <a href="#">Shortcuts</a>  </li>
          <li>  <a href="#">Overview</a>   </li>
          <li>  <a href="#">Events</a>     </li>
          <li>  <a href="#">About</a>      </li>
          <li>  <a href="#">Services</a>   </li>
          <li>  <a href="#">Contact</a>    </li>
      </ul>
    </div>
    @include('base.loggednavbar')

    <div id="page-content-wrapper">
      <div class="container">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="my-4">Alunos por Departamento</h1>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <div class="panel-body">

                @foreach($departamentos as $key => $value)
                  <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                    <div class="card h-100">
                      <div class="card-body">
                        <h1 class="card-title">
                          <a href="{{ URL::to('alunos/departamento/'.$key) }}">{{ $value}}</a>
                        </h1>  
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div> 
          <div class="panel-footer">
            <ul class="pagination justify-content-center">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">1</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">2</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#">3</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
  </script>
@endsection
