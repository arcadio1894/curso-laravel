@extends('layouts.admin')

@section('styles')
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">LISTADO DE CATEGORÍAS</div>

                <div class="panel-body" id="body">
                    <a class="btn btn-primary" href="{{ url('home') }}">Ir al Inicio</a>
                    <a class="btn btn-success" id="btnRegistrar">Nueva categoría</a>
                    <a class="btn btn-warning" href="{{ url('/category/enabled') }}">Habilitar categoría</a>

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
                                    <a class="btn btn-warning" data-editar data-id="{{ $category->id }}" data-name="{{ $category->name }}" data-description="{{ $category->description }}" >Editar</a>
                                    <a class="btn btn-danger" data-eliminar data-id="{{ $category->id }}" data-name="{{ $category->name }}">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<div id="modalRegistrar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-10">
                    <h5 class="modal-title">Nueva Categoria</h5>
                </div>
                <div class="col-md-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
            <form id="formRegistrar" data-url="{{ url('/category/store') }}">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre de la categoria</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripcion de la categoria</label>
                        <input type="text" class="form-control" id="description" name="description">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalModificar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-10">
                    <h5 class="modal-title">Editar Categoria</h5>
                </div>
                <div class="col-md-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
            <form id="formModificar" data-url="{{ url('/category/update') }}">
                <input type="hidden" name="category_id" id="id_edit">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nameE">Nombre de la categoria</label>
                        <input type="text" class="form-control" id="nameE" name="nameE">
                    </div>
                    <div class="form-group">
                        <label for="descriptionE">Descripcion de la categoria</label>
                        <input type="text" class="form-control" id="descriptionE" name="descriptionE">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div id="modalEliminar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-10">
                    <h5 class="modal-title">Eliminar Categoria</h5>
                </div>
                <div class="col-md-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
            <form id="formEliminar" data-url="{{ url('/category/destroy') }}">
                <input type="hidden" name="category_id" id="id_delete">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nameD">¿Está seguro de eliminar esta categoría?</label>
                        <input type="text" class="form-control" id="nameD" name="nameD" readonly>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
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
