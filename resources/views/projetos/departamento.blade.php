@section('content')
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('nerds') }}">Projetos de Pesquisa</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('projetos') }}">Ver Projetos</a></li>
        <li><a href="{{ URL::to('projetos/create') }}">Criar um projeto</a>
    </ul>
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">
                   <h1>Todos os projetos</h1>
                </div>
                <div class="panel-body">
                    

                    <!-- will be used to show any messages -->
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif

                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <td>Título</td>
                                <td>Apresentação</td>
                                <td>Objetivo</td>
                                <td>id</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($projetos as $key => $value)
                                <tr>
                                    <td>{{ $value->titulo }}</td>
                                    <td>{{ $value->apresentacao_do_problema }}</td>
                                    <td>{{ $value->objetivo }}</td>
                                    <td>{{ $value->id}}</td>
                                 

                                    <!-- we will also add show, edit, and delete buttons -->
                                    <td>

                                        <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                                        <!-- we will add this later since its a little more complicated than the other two buttons -->
                                        {{ Form::open(array('url' => 'projetos/' . $value->id, 'class' => 'pull-right')) }}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Deletar Projeto', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}

                                        <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                                        <a class="btn btn-small btn-success" href="{{ URL::to('projetos/' . $value->id) }}">Ver detalhes sobre o projeto</a>

                                        <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                                        <a class="btn btn-small btn-info" href="{{ URL::to('projetos/' . $value->id . '/edit') }}">Editar projeto</a>

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