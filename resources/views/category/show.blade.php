@extends('layouts.user')

@section('styles')

@endsection

@section('header')
    <div class="tittle-head">
        <h4 class="latest-text"> {{ $category->name }} </h4>
        <div class="container">
            <div class="agileits-single-top">
                <ol class="breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Categorías</li>
                </ol>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="w3_agile_featured_movies">
            @foreach( $category->films as $film )
                <div class="col-md-2 w3l-movie-gride-agile" style="height: 350px">
                    <a href="{{ url('/film/show/'.$film->id) }}" class="hvr-shutter-out-horizontal">
                        @if( $film->image == '' || $film->image == null )
                            <img src="{{ asset('admin/assets/images/films/notimage.png') }}" title="album-name" class="img-responsive" alt=" " />
                        @else
                            <img src="{{ asset('admin/assets/images/films/'.$film->image) }}" title="album-name" class="img-responsive" alt=" " />
                        @endif
                        <div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
                    </a>
                    <div class="mid-1 agileits_w3layouts_mid_1_home">
                        <div class="w3l-movie-text">
                            <h6><a href="{{ url('/film/show/'.$film->id) }}">{{ $film->name }}</a></h6>
                        </div>
                        <div class="mid-2 agile_mid_2_home">
                            <p>{{ $film->year }}</p>
                            <div class="block-stars">
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
            @endforeach
        </div>
    </div>
</div>


@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/Category/index.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.toast.js') }}"></script>
@endsection
