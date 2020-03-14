@extends('layouts.admin')

@section('styles')
    <link href="{{ asset('css/jquery.toast.css') }}" rel="stylesheet">
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
        <li class="active">Listado</li>
    </ul><!-- /.breadcrumb -->
@endsection

@section('content')
    {{--@foreach($films as $film)
        <p>Pelicula: {{ $film->name }}</p>
        @foreach($film->categories as $category)
            <p>Categoria:{{ $category->name }}</p>
        @endforeach
        @foreach($film->states as $state)
            <p>Estado:{{ $state->name }}</p>
        @endforeach
    @endforeach--}}

  {{--  @foreach($users as $user)
        <p>Usuario: {{ $user->name }}</p>
        <p>Role: {{ $user->role->name }}</p>
    @endforeach
--}}
    {{--@foreach($rentals as $rental)
        <p>Rental: {{ $rental->created_at }}</p>
        <p>Rental_id: {{ $rental->id }}</p>
        <p>Usuario: {{ $rental->user->name }}</p>
        <p>Role: {{ $rental->user->role->name }}</p>
    @endforeach--}}

    <p>Rental: {{ $user->name }}</p>
    @foreach($user->rentals as $rental)
        <p>Fecha: {{ $rental->rental_date }}</p>
        <p>Rental_id: {{ $rental->id }}</p>

        {{-- <p>Role: {{ $rental->user->role->name }}</p>--}}
    @endforeach

@endsection


