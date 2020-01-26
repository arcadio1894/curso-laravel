@extends('layouts.admin')

@section('styles')
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-duallistbox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/bootstrap-multiselect.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('admin/assets/css/select2.min.css')}}" />
@endsection

@section('activeF')
    active open
@endsection

@section('createF')
    active
@endsection

@section('breadcrumbs')
    <ul class="breadcrumb">
        <li>
            <i class="ace-icon fa fa-home home-icon"></i>
            <a href="{{ url('/home') }}">Inicio</a>
        </li>

        <li>
            <a href="{{ url('/films') }}">Películas</a>
        </li>
        <li class="active">Crear</li>
    </ul><!-- /.breadcrumb -->
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">CREAR PELÍCULA</div>

                <div class="panel-body" id="body">
                    <form id="formRegistrar" data-url="{{ url('/film/store') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Nombre de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="name" placeholder="Nombre" name="name" class="col-xs-10 col-sm-5" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="duration"> Duración (min) de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="duration" placeholder="Duración" name="duration" class="col-xs-10 col-sm-5" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="description"> Descripción (min) de la película </label>

                            <div class="col-sm-9">
                                <textarea class=" col-xs-10 col-sm-5" id="description" name="description" placeholder="Descripción"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="year"> Año de estreno de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="year" placeholder="Año de estreno" name="year" class="col-xs-10 col-sm-5" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="url"> Url de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="url" placeholder="Url" name="url" class="col-xs-10 col-sm-5" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="image"> Imagen de la película </label>

                            <div class="col-sm-9">
                                <input type="file" id="image" name="image" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="stars"> Calificación de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="stars" name="starts" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="states"> Estados de la película </label>

                            <div class="col-sm-9">
                                <select multiple id="states" name="states[]" class="select2" data-placeholder="Seleccione los estados...">
                                    @foreach( $states as $state )
                                        <option value="{{ $state->id }}">{{ $state->name }}</option>
                                    @endforeach

                                </select>

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="category"> Categorías de la película </label>

                            <div class="col-sm-9">
                                <select multiple id="category" name="categories[]" class="select2" data-placeholder="Seleccione las categorías...">
                                    @foreach( $categories as $category )
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach

                                </select>

                            </div>

                        </div>

                        <div class="form-actions center">
                            <button type="submit" class="btn btn-sm btn-success">
                                Guardar datos
                                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                            </button>
                            <button type="reset" class="btn btn-sm btn-danger">
                                Cancelar
                                <i class="ace-icon fa fa-arrow-right icon-on-right bigger-110"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery.toast.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Film/create.js') }}"></script>

    <script src="{{ asset('admin/assets/js/select2.min.js')}}"></script>
    <script type="text/javascript">
        jQuery(function($) {

            $('#stars').ace_spinner({value:0,min:0,max:5,step:1, on_sides: true, icon_up:'ace-icon fa fa-plus bigger-110', icon_down:'ace-icon fa fa-minus bigger-110', btn_up_class:'btn-success' , btn_down_class:'btn-danger'});

            //select2
            $('.select2').css('width','300px').select2({allowClear:true})
            $('#select2-multiple-style .btn').on('click', function(e){
                var target = $(this).find('input[type=radio]');
                var which = parseInt(target.val());
                if(which == 2) $('.select2').addClass('tag-input-style');
                else $('.select2').removeClass('tag-input-style');
            });

        });
    </script>
@endsection
