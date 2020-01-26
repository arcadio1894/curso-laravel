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
        <li class="active">Editar</li>
    </ul><!-- /.breadcrumb -->
@endsection

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">EDITAR PELÍCULA</div>

                <div class="panel-body" id="body">
                    <form id="formEditar" data-url="{{ url('/film/update') }}" class="form-horizontal" role="form" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $film->id }}">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="name"> Nombre de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="name" placeholder="Nombre" name="name" class="col-xs-10 col-sm-5" value="{{ $film->name }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="duration"> Duración (min) de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="duration" placeholder="Duración" name="duration" class="col-xs-10 col-sm-5" value="{{ $film->duration }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="description"> Descripción (min) de la película </label>

                            <div class="col-sm-9">
                                <textarea rows="5" class=" col-xs-10 col-sm-5" id="description" name="description" placeholder="Descripción" >{{ $film->description }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="year"> Año de estreno de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="year" placeholder="Año de estreno" name="year" class="col-xs-10 col-sm-5" value="{{ $film->year }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="url"> Url de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="url" placeholder="Url" name="url" class="col-xs-10 col-sm-5" value="{{ $film->url }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="image"> Imagen de la película </label>

                            <div class="col-sm-9">
                                <input type="file" id="image" name="image"  />
                                <img src="{{ asset('admin/assets/images/films/'.$film->image) }}" alt="" width="60px" height="80px">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="stars"> Calificación de la película </label>

                            <div class="col-sm-9">
                                <input type="text" id="stars" name="starts" value="{{ $film->starts }}" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="states"> Estados de la película </label>

                            <div class="col-sm-9">
                                <select multiple id="states" name="states[]" class="select2" data-placeholder="Seleccione los estados...">
                                    {{ $count = 0 }}
                                    @foreach( $states as $state )
                                        @foreach( $film->states as $film_states )
                                            @if( $state->id == $film_states->pivot->state_id )
                                                <option selected value="{{ $state->id }}">{{ $state->name }}</option>
                                                {{ $count++ }}
                                            @endif
                                        @endforeach
                                        @if( $count == 0 )
                                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                                        @endif
                                        {{ $count = 0 }}
                                    @endforeach

                                </select>

                            </div>

                        </div>

                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="category"> Categorías de la película </label>

                            <div class="col-sm-9">
                                <select multiple id="category" name="categories[]" class="select2" data-placeholder="Seleccione las categorías...">
                                    {{ $count = 0 }}
                                    @foreach( $categories as $category )
                                        @foreach( $film->categories as $category_film )
                                            @if( $category->id == $category_film->pivot->category_id )
                                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                                                {{ $count++ }}
                                            @endif
                                        @endforeach
                                        @if( $count == 0 )
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endif
                                        {{ $count = 0 }}
                                    @endforeach

                                </select>

                            </div>

                        </div>

                        <div class="form-actions center">
                            <button type="submit" class="btn btn-sm btn-success">
                                Guardar cambios
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
    <script type="text/javascript" src="{{ asset('js/Film/edit.js') }}"></script>

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
