@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">PAGINA DE INICIO</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ url('/film/top') }}" class="btn btn-default btn-app">
                        <i class="ace-icon fa fa-cog bigger-230"></i>
                        Películas
                    </a>
                    <a href="#" class="btn btn-app btn-primary">
                        <i class="ace-icon fa fa-pencil-square-o bigger-230"></i>
                        Clientes
                    </a>

                    <a href="#" class="btn btn-app btn-success">
                        <i class="ace-icon fa fa-refresh bigger-230"></i>
                        Categorías
                    </a>


                </div>
            </div>
        </div>
    </div>

@endsection
