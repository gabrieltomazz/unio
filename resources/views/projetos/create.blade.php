
<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('projetos') }}">Nerd Alert</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('projetos') }}">View All projetos</a></li>
        <li><a href="{{ URL::to('projetos/create') }}">Create a Project</a>
    </ul>
</nav>

<h1>Create a Project</h1>

<!-- if there are creation errors, they will show here -->
{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'projetos')) }}

    <div class="form-group">
        {{ Form::label('name', 'Titulo') }}
        {{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('apresentacao_do_problema', 'Apresentação do Problema') }}
        {{ Form::textarea('apresentacao_do_problema', Input::old('apresentacao_do_problema'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('estado_da_arte', 'Estado da Arte') }}
        {{ Form::textarea('estado_da_arte', Input::old('estado_da_arte'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('justificativa_do_projeto', 'Justificativa do Projeto') }}
        {{ Form::textarea('justificativa_do_projeto', Input::old('justificativa_do_projeto'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('objetivo', 'Objetivo') }}
        {{ Form::textarea('objetivo', Input::old('objetivo'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('metodo', 'Método') }}
        {{ Form::textarea('metodo', Input::old('metodo'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('cronograma', 'Cronograma') }}
        {{ Form::text('cronograma', Input::old('cronograma'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('ref_bibliograficas', 'Referências Bibliográficas') }}
        {{ Form::text('ref_bibliograficas', Input::old('ref_bibliograficas'), array('class' => 'form-control')) }}
    </div>

    {{ Form::submit('Create the Project!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

</div>
</body>
</html>