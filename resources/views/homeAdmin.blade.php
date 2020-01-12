@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PAGINA DE INICIO</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a class="btn btn-primary" href="{{ url('categories') }}">Ver las categorías</a>
                        <a class="btn btn-primary" href="{{ url('users') }}">Ver los usuarios</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
