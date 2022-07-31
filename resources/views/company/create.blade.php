@extends('layout')

@section('content')
    @include('partials.errors')
    <form action="{{ route('store.company') }}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="name" placeholder="name"><br>
        <input type="text" name="salary" placeholder="salary"><br>
        <input type="submit" value="Submit">
    </form>
@endsection
