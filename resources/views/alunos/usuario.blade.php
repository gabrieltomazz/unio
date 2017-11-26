@extends('base.layout')



@section('content')
@include('base.navbar')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    <div class="panel-body">
                        <div >
                            <table class="table table-striped table-bordered">
                                <thead>
                                    
                                </thead>
                                
                                <tbody>
                                    <tr>
                                        <td>Nome</td>
                                        <td>{{ Auth::user()->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>E-mail</td>
                                        <td>{{ Auth::user()->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Biografia</td>
                                        <td>{{ Auth::user()->biografia }}</td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 