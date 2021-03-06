@extends('base.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



    <?php if ($user->tipo_user_id == 1): ?>
        <meta http-equiv="refresh" content="2;url=/projetos" /> 
    <?php endif ?>

    <?php if ($user->tipo_user_id == 2): ?>
        <meta http-equiv="refresh" content="2;url=/alunos" /> 
    <?php endif ?>


