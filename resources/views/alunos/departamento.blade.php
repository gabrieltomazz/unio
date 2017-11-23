<?php echo Auth::id(); ?>

@extends('base.layout')



@section('content')
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('projetos') }}">Projetos de Pesquisa</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('projetos') }}">Ver Projetos</a></li>
        <li><a href="{{ URL::to('projetos/create') }}">Criar um projeto</a>
    </ul>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <div class="panel panel-default">

                <div class="panel-heading">
                   <h1>Todos os users</h1>
                </div>
                <div class="panel-body">
                    

                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Nome</td>
                                <td>Email</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $key => $value)
                                <tr>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->email }}</td>
                             
                                 

                                    <!-- we will also add show, edit, and delete buttons -->
                                    <td>

                                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                                       
                                          <!--   <a class="btn btn-success" href="{{ URL::to('users/' . $value->id) }}">Ver detalhes sobre o projeto</a> -->
                                    </td>                                         
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
