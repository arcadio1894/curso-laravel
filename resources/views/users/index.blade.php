@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">LISTADO DE USUARIOS</div>

                <div class="panel-body" id="body">
                    <a class="btn btn-primary" href="{{ url('home') }}">Ir al Inicio</a>
                    <a class="btn btn-success" id="btnRegistrar">Nuevo usuario</a>
                    <a class="btn btn-warning" href="{{ url('/user/enabled') }}">Habilitar usuario(*)</a>

                    <table  class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rol</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach( $users as $user )
                            <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->role->name }}</td>

                                <td>
                                    <a class="btn btn-warning" data-editar data-id="{{ $user->id }}" data-name="{{ $user->name }}" data-email="{{ $user->email }}" >Editar</a>
                                    <a class="btn btn-danger" data-eliminar data-id="{{ $user->id }}" data-name="{{ $user->name }}">Eliminar</a>
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
<div id="modalRegistrar" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-md-10">
                    <h5 class="modal-title">Nuevo Usuario</h5>
                </div>
                <div class="col-md-2">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

            </div>
            <form id="formRegistrar" data-url="{{ url('/user/store') }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nombre del usuario</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email del usuario</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password del usuario</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">Confirmar password del usuario</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    </div>
                    <div class="form-group">
                        <label for="role">Rol de Usuario</label>
                        <select class="form-control" id="role" name="role">
                            <option value="1">Administrador</option>
                            <option value="2">Usuario</option>
                            <option value="3">Empleado</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
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
    <script type="text/javascript" src="{{ asset('js/User/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.toast.js') }}"></script>
@endsection
