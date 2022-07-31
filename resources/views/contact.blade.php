@extends('layout')


@section('content')
    <h2>contact</h2>


    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form action="{{ route('contact') }}" method="post">
        @csrf
        <input type="text" name="email" value="{{old('email')}}"><br>
        {!! $errors->first('email', '<small>:message</small>') !!}<br>
        <input type="text" name="name" placeholder="name" value="{{old('name')}}"><br>
        {!! $errors->first('name', '<small>:message</small>') !!}<br>
        <button type="submit">Enviar</button>
    </form>
@endsection
