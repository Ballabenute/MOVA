@extends('layout')

@section('title', 'Menu')


@section('content')

    <div style="display: inline-flex; margin-top: 100px;">
        <img src="{{ URL::asset('/image/html5.png') }}" alt="icon" style="height:200px;margin-right: 20px;">
        <img src="{{ URL::asset('/image/php.png') }}" alt="icon" style="height:200px">
        <img src="{{ URL::asset('/image/laravel.png') }}" alt="icon" style="height:200px">
        <img src="{{ URL::asset('/image/mysql.png') }}" alt="icon" style="height:200px">

    </div>

@stop