@extends('base.layout')

@section('header')
    
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">
    

@endsection


@section('content')

@include('base.loggednavbar')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">

                <div class="panel-heading">
	               <h1>Projeto {{ $projeto->titulo }}</h1>
                </div>
                <div class="panel-body">
                    <div >
                        <table class="table table-striped table-bordered">
                            <thead>
                                
                            </thead>
                            
                            <tbody>

                                
                                <tr>
                                    <td>Apresentação</td>
                                    <td>{{$projeto->apresentacao_do_problema }}</td>
                                <tr>
                                    <td>Estado da Arte</td>
                                    <td>{{$projeto->estado_da_arte }}</td>
                                </tr>

                                <tr>
                                    <td>Justificativa do Projeto</td>
                                    <td>{{$projeto->justificativa_do_projeto }}</td>
                                </tr>

                                <tr>
                                    <td>Objetivo</td>
                                    <td>{{$projeto->objetivo }}</td>
                                </tr>

                                <tr>
                                    <td>Método</td>
                                    <td>{{$projeto->metodo }}</td>
                                </tr>


                                <tr>
                                    <td>Apresentação</td>
                                    <td>{{$projeto->apresentacao_do_problema }}</td>
                                </tr>

                                <tr>
                                    <td>Cronograma</td>

                                    <td>{{$projeto->cronograma }}</td>
                                </tr>

                                <tr>
                                    <td>Referências Bibliográficas</td>
                                    <td>{{$projeto->ref_bibliograficas }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

