@extends('layout')

@section('content')
    <p>name: {{ $company->name }}</p>
    <p>salary: {{ $company->salary }}</p>
@endsection
