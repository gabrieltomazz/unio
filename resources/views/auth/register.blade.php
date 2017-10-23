<?php use App\Http\Controllers\UniversidadeController;
// $universidades = UniversidadeController::getUniversidades();
$universidades = UniversidadeController::getListUniversidades(); ?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/register.js') }}"></script>
    @include('base.fileUploadInclude')
    <title></title>
</head>


<body>
    @include('base.navbar')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">
                    <div class="panel-heading">                        
                        <div class="btn-group">
                            <button type="button" id="btn-aluno" data-toggle="collapse" href="#formAluno"class="btn btn-primary">Aluno</button>
                            <button type="button" id="btn-professor" data-toggle="collapse" href="#FormProfessor" class="btn btn-primary">Professor</button>
                        </div>

                    </div>

                    <div id="formAluno" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{ Form::open(array('url' => '/register')) }}

                                <div class="form-group">
                                    {{ Form::label('name', 'Nome', array('class' => 'col-md-4 control-label')) }}
                                    <div class="col-md-6">
                                        {{ Form::text('name', Input::old('nome'), array('class' => 'form-control')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('email', 'E-mail', array('class' => 'col-md-4 control-label')) }}
                                    <div class="col-md-6">
                                        {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('biografia', 'Biografia', array('class' => 'col-md-4 control-label')) }}
                                    <div class="col-md-6">
                                        {{ Form::textarea('biografia', Input::old('biografia'), array('class' => 'form-control')) }}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="Areas" class="col-md-4 control-label">Áreas de interesse:</label>

                                    <div class="col-md-6">
                                        <label><input type="checkbox" value="">Option 1 </label>
                                        <label><input type="checkbox" value="">Option 2 </label>
                                        <label><input type="checkbox" value="">Option 3 </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    {{ Form::label('universidade', 'Universidade', array('class' => 'col-md-4 control-label')) }}
                                    <div class="col-md-6">
                                        {{ Form::select('universidade_id', $universidades,  Input::old('Universidade'), array('class' => 'form-control')) }}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="sel1" class="col-md-4 control-label" >Currículo:</label>
                                    <div class="col-md-6">
                                        <div class="file-loading">
                                            <input id="input-b3" name="input-b3[]" type="file" class="file" multiple 
                                            data-show-upload="false" data-show-caption="true" data-allowed-file-extensions='["pdf"]' data-msg-placeholder="Select {files} for upload...">

                                            {{ Form::file('universidade_id', Input::old('Universidade'), array('class' => 'file', 'type' => 'file')) }}
                                        </div>

                                    </div>
                                </div>



                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Senha:</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirme a senha:</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Registrar
                                        </button>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                        <div class="panel-footer">Panel Footer</div>
                    </div>

                    <div id="FormProfessor" class="panel-collapse collapse">
                        <div class="panel-body">
                            {{ HTML::ul($errors->all()) }}

                            {{ Form::open(array('url' => '/register')) }}

                            <div class="form-group">
                                {{ Form::label('name', 'Titulo', array('class' => 'col-md-4 control-label')) }}
                                <div class="col-md-6">
                                    {{ Form::text('name', Input::old('titulo'), array('class' => 'form-control')) }}
                                </div
>                            </div>

                            <div class="form-group">
                                {{ Form::label('email', 'E-mail', array('class' => 'col-md-4 control-label')) }}
                                <div class="col-md-6">
                                    {{ Form::email('email', Input::old('email'), array('class' => 'form-control')) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('senha', 'Senha', array('class' => 'col-md-4 control-label')) }}
                                <div class="col-md-6">
                                    {{ Form::password('password', ['class' => 'form-control'])}}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('departamento', 'Departamento', array('class' => 'col-md-4 control-label')) }}
                                <div class="col-md-6">
                                    {{ Form::select('departamento', array('0' => 'Selecione Departamento', '1' => 'Biologia', '2' => 'CIC', '3' => 'Exercito'), Input::old('departamento'), array('class' => 'form-control')) }}
                                </div>
                            </div>

                            <div class="form-group">
                                {{ Form::label('universidade', 'Universidade', array('class' => 'col-md-4 control-label')) }}
                                <div class="col-md-6">
                                    {{ Form::select('universidade_id', $universidades, Input::old('Universidade'), array('class' => 'form-control')) }}

                                </div>
                            </div>
               
                            <div class="form-group">
                                {{ Form::label('biografia', 'Biografia', array('class' => 'col-md-4 control-label')) }}
                                <div class="col-md-6">
                                    {{ Form::textarea('biografia', Input::old('biografia'), array('class' => 'form-control')) }}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    {{ Form::submit('Registrar!', array('class' => 'btn btn-primary')) }}
                                {{ Form::close() }}
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>



                </div>




            </div>
        </div>
    </div>
    <script src ="{{ asset('js/jquery-3.2.1.js') }}"></script>
    <script src ="{{ asset('js/register.js') }}"></script>
</body>

</html>




