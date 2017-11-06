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