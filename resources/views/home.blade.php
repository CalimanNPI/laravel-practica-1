@extends('layout')

@section('title', 'Home')

@section('content')
    <h1>Este es el home {{ $nombre ?? 'invitado' }}</h1>
@endsection
