<!DOCTYPE html>
<html>
<head>
	<title>{{$projeto->titulo}}</title>
	    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
	<h1>Showing {{ $projeto->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $projeto->titulo }}</h2>
        <p>
            <strong>Titulo:</strong> {{ $projeto->email }}<br>
            <strong>Apresentação:</strong> {{ $projeto->apresentacao_do_problema }}<br>
            <strong>Estado da Arte:</strong> {{ $projeto->estado_da_arte }}<br>
            <strong>Justificativa do Projeto:</strong> {{ $projeto->justificativa_do_projeto}}<br>
            <strong>Objetivo:</strong> {{ $projeto->objetivo }}<br>
            <strong>Metodo:</strong> {{ $projeto->metodo}}<br>
            <strong>Apresentação:</strong> {{ $projeto->apresentacao_do_problema }}<br>
            <strong>Cronograma</strong>{{ $projeto->cronograma}}<br>
            <strong>Referências Bibliográficas:</strong> {{ $projeto->ref_bibliograficas }}<br>
        </p>
    </div>
</body>
</html>