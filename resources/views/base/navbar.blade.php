
<nav id= "welcome-nav" class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="/">Unio</a>
    </div>
    
    <ul class="nav navbar-nav navbar-left">
      <li class="active"> <a href="/">Home</a>  </li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <?php if(!Auth::id()){ ?>
        <li>
          <a href="/register"> <span class="glyphicon glyphicon-user"> Registrar-se</a>
        </li>
        
        <li>
          <a href="/login"><span class="glyphicon glyphicon-log-in"> Entrar</a>
        </li>
      <?php }else{ ?>
        <li><a>{{ Auth::user()->name }}</a></li>
        <li><a href="{{ URL::to('/logout') }}">Logout</a></li>
      <?php } ?>

       

    </ul>
  </div>
</nav>