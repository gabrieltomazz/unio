@extends('base.layout')


@section('header')

    <link rel="stylesheet" href="{{ asset('css/create.css') }}">

@endsection



@section('content')

@include('base.navbar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">

                    <h1>Editar projeto</h1>
                </div>
                <div class="panel-body">

                    <!-- if there are creation errors, they will show here -->
                    {{ HTML::ul($errors->all()) }}
                    {{ Form::model($projeto, array('route' => array('projetos.update', $projeto->id), 'method' => 'PUT')) }}

					<div class="form-group">
						{{ Form::label('name', 'Titulo', array('class' => 'col-md-4 control-label')) }}
						
						<div class="col-md-6">
							{{ Form::text('titulo', Input::old('titulo'), array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('apresentacao_do_problema', 'Apresentação do Problema', array('class' => 'col-md-4 control-label')) }}
						
						<div class="col-md-6">
							{{ Form::textarea('apresentacao_do_problema', Input::old('apresentacao_do_problema'), array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('estado_da_arte', 'Estado da Arte', array('class' => 'col-md-4 control-label')) }}
						
						<div class="col-md-6">
							{{ Form::textarea('estado_da_arte', Input::old('estado_da_arte'), array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('justificativa_do_projeto', 'Justificativa do Projeto', array('class' => 'col-md-4 control-label')) }}
						
						<div class="col-md-6">
							{{ Form::textarea('justificativa_do_projeto', Input::old('justificativa_do_projeto'), array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('objetivo', 'Objetivo', array('class' => 'col-md-4 control-label'))}}
						
						<div class="col-md-6">
							{{ Form::textarea('objetivo', Input::old('objetivo'), array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('metodo', 'Método', array('class' => 'col-md-4 control-label'))}}
						
						<div class="col-md-6">
							{{ Form::textarea('metodo', Input::old('metodo'), array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('cronograma', 'Cronograma', array('class' => 'col-md-4 control-label')) }}
						
						<div class="col-md-6">
							{{ Form::text('cronograma', Input::old('cronograma'), array('class' => 'form-control')) }}
						</div>
					</div>

					<div class="form-group">
						{{ Form::label('ref_bibliograficas', 'Referências Bibliográficas', array('class' => 'col-md-4 control-label')) }}
						
						<div class="col-md-6">
							{{ Form::text('ref_bibliograficas', Input::old('ref_bibliograficas'), array('class' => 'form-control')) }}
						</div>
					</div>

					<?php if (Auth::check()){ ?>
	                     <div class="form-group" style="display: none;">
	                        {{ Form::label('users_id', 'User', array('class' => 'col-md-4 control-label')) }}
	                        <div class="col-md-6">
	                            {{ Form::number('users_id', Auth::id()) }}
	                        </div>
	                    </div>

                    <?php } ?>



				{{ Form::submit('Edit the projeto!', array('class' => 'btn btn-primary')) }}

				{{ Form::close() }}
                    
                </div>
            </div>
        </div>
    </div>
</div>


@endsection


