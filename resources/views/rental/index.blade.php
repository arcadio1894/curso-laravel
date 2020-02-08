@extends('layouts.user')

@section('styles')
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
    <!-- tables -->
    <link rel="stylesheet" type="text/css" href="{{ asset('user/list-css/table-style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('user/list-css/basictable.css') }}" />
    <script type="text/javascript" src="{{ asset('user/list-js/jquery.basictable.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('user/list-js/jquery.basictable.min.js') }}"></script>

    <!-- //tables -->
@endsection

@section('header')
    <div class="tittle-head">
        <h4 class="latest-text"> Listado de Alquileres </h4>
        <div class="container">
            <div class="agileits-single-top">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Pelicula</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="single-page-agile-info">
            <!-- /movie-browse-agile -->
            <div class="show-top-grids-w3lagile">
                <div class=" single-left">
                    <div class="song">
                        <div class="agile-news-table">
                            <table id="table-breakpoint">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Fecha</th>
                                    <th>Películas</th>
                                    <th>Status</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $rentals as $rental )
                                <tr>
                                    <td>{{ $rental->id }}</td>
                                    <td>{{ $rental->rental_date }}</td>

                                    <td class="w3-list-img">
                                        @foreach( $rental->films as $film )
                                            <a href="{{ url('/film/show/'.$film->id) }}">
                                                <span>{{ $film->name }}</span>
                                                <img src="{{ asset('admin/assets/images/films/'.$film->image) }}" alt="" />
                                                <span>{{ $film->price }}</span>
                                            </a>
                                        @endforeach
                                    </td>
                                    @if( $rental->active )
                                        <td>Compra por confirmar</td>
                                    @else
                                        <td>Compra Finalizada</td>
                                    @endif
                                    <td>
                                        @if($rental->active)
                                            <button type="button" data-url="{{ url('/rental/confirmationrental') }}" data-confirmation="{{ $rental->id }}" class="btn btn-primary"> Confirmar </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/jquery.toast.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/Rental/index.js') }}"></script>
@endsection
