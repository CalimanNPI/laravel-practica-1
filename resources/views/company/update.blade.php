@extends('layout')

@section('content')
    @include('partials.errors')
    <form action="{{ route('company.update', $company) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="text" name="name" placeholder="name" value="{{ old('name', $company->name) }}"><br>
        <input type="text" name="salary" placeholder="salary" value="{{ old('salary', $company->salary) }}"><br>
        <input type="submit" value="Submit">
    </form>
@endsection
