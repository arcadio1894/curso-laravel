@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">LISTADO DE CATEGORÍAS ELIMINADAS</div>

                <div class="panel-body" id="body">
                    <a class="btn btn-primary" href="{{ url('/categories') }}">Ir a categorias</a>

                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $categories as $category )
                            <tr>
                                <th scope="row">{{ $category->id }}</th>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->description }}</td>
                                <td>
                                    <a class="btn btn-warning" data-habilitar data-id="{{ $category->id }}" data-name="{{ $category->name }}" >Habilitar</a>
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

<div id="modalHabilitar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-10">
                    <h5 class="modal-title">Habilitar Categoria</h5>
                </div>
                <div class="col-md-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
            <form id="formHabilitar" data-url="{{ url('/category/abled') }}">
                <input type="hidden" name="category_id" id="id_delete">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nameH">¿Está seguro de habilitar esta categoría?</label>
                        <input type="text" class="form-control" id="nameH" name="nameH" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Habilitar</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/Category/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.toast.js') }}"></script>
@endsection
