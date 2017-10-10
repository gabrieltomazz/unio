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
        <nav id = "welcome-nav" class="navbar navbar-default ">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Unio</a>
                </div>
                <ul class="nav navbar-nav">
                    <li ><a href="#">Home</a></li>
                    <li><a href="/user">Log in</a></li>
                    <li><a href="#">Register</a></li>
                    <li><a href="#">About us</a></li>
                </ul>
                </div>
        </nav> 

        <div id = "fundo">
           
                <div class="row vertical-offset-100">
                    
                    <div class="centro">
                        <div> 
                        <h1>Unio</h1>
                        <h3>Integrando alunos e professores</h3>
                        
                            <select  id = "form-control" class="form-control">
                              <option>Aluno</option>
                              <option>Professor</option>
                            </select>    
                        
                        </div>

                         <button id= "botao-entrar" type="button" class="btn btn-primary btn-lg">Entrar</button>
                   
                    </div>

                   
                        
                </div>
        
        </div>

    </body>
</html>