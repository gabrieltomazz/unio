<?php use App\Http\Controllers\DepartamentoController;
// $universidades = UniversidadeController::getUniversidades();
$departamentos = DepartamentoController::getListDepartamentos();
$departamentos = (object)$departamentos; 

?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet"> 
   
    <link rel="stylesheet" href="<?php echo asset('css/4-col-portfolio.css')?>"> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
</head>
<body>
    <div id="wrapper">
     <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ URL::to('projetos') }}">Projetos de Pesquisa</a>
                </div>
                <ul class="nav navbar-nav">
                 <li><a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">SideBar</a></li>
                    <li><a href="{{ URL::to('projetos') }}">Ver Projetos</a></li>
                    <li><a href="{{ URL::to('projetos/create') }}">Criar um projeto</a>
                </ul>
            </nav>

            <!-- Page Content -->
            <div class="container">

              <!-- Page Heading -->
              <h1 class="my-4">Projetos por Departamento
              </h1>
              <div class="row">
                @foreach($departamentos as $key => $value)
                    <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item">
                      <div class="card h-100">
                        <div class="card-body">
                          <h1 class="card-title">
                            <a href="{{ URL::to('projetos/departamento/' . $key) }}">{{ $value}}</a>
                          </h1>
                            
                        </div>
                      </div>
                    </div>
                 @endforeach
             </div>

              <!-- Pagination -->
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
            <!-- /.container -->
        </div>
    </div>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>


=