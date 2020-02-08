@extends('layouts.user')

@section('styles')
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div class="tittle-head">
        <h4 class="latest-text"> {{ $film->name }} </h4>
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
                <div class="col-sm-8 single-left">
                    <div class="song">
                        <div class="song-info">
                            <h3>{{ $film->name }}</h3>
                        </div>
                        <input data-url="{{ url('/rental/confirmation') }}" type="hidden" id="film_id" value="{{ $film->id }}">
                        <div class="video-grid-single-page-agileits">
                            <div class="col-md-2 w3l-movie-gride-agile" style="height: 350px">
                                <a href="{{ url('/film/show/'.$film->id) }}" class="">
                                    @if( $film->image == '' || $film->image == null )
                                        <img src="{{ asset('admin/assets/images/films/notimage.png') }}" title="album-name" class="img-responsive" alt=" " />
                                    @else
                                        <img src="{{ asset('admin/assets/images/films/'.$film->image) }}" title="album-name" class="img-responsive" alt=" " />
                                    @endif

                                </a>
                                <div class="mid-1 agileits_w3layouts_mid_1_home">
                                    <div class="w3l-movie-text">
                                        <h5>Año: {{ $film->year }}</h5>
                                    </div>
                                    <div class="mid-1 agile_mid_2_home">
                                        <div class="">
                                            <ul class="w3l-ratings">
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-10" style="height: 250px">
                                <h4 id="h4.-bootstrap-heading"> Descripción: </h4>
                                <p> {{ $film->description }} </p> <br>
                                <h4 id="h4.-bootstrap-heading"> Géneros: </h4>
                                <h4>
                                    <div class="single-agile-shar-buttons">
                                    @foreach( $film->categories as $category )
                                        <a href="{{ url('/category/show/'.$category->id) }}"><span class="label label-warning">{{ $category->name }}</span></a>
                                    @endforeach
                                    </div>
                                </h4>
                                <br>
                                @guest
                                @else
                                    <button id="btnRental" data-url="{{ url('/rental/addFilm') }}" data-film="{{ $film->id }}" class="btn btn-block btn-success">COMPRAR</button>
                                @endguest

                            </div>
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
    <script type="text/javascript" src="{{ asset('js/Film/cart.js') }}"></script>
@endsection
