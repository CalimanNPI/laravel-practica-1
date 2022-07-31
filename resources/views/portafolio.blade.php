@extends('layout')


@section('content')

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    @auth
        
    <a href="{{ route('create') }}">Create</a>
    @endauth
    <ul>
        @if ($itemsTitle)
            @foreach ($itemsTitle as $itemTitle)
                <li>
                    <a href="{{ route('show', $itemTitle) }}">{{ $itemTitle->name }}</a><br>
                    <a href="{{ route('edit', $itemTitle) }}">Edit</a><br>
                </li>
            @endforeach
        @else
            <li>No hay proyectos</li>
        @endif
    </ul>

    <ul>
        @isset($itemsTitle)
            @foreach ($itemsTitle as $itemTitle)
                <li>{{ $itemTitle }}</li>
            @endforeach
        @else
            <li>No hay proyectos</li>
        @endisset
    </ul>


    <ul>
        @forelse ($itemsTitle as $itemTitle)
            <li>{{ $itemTitle }} {{ $loop->last ? 'Es  el último' : '' }}</li>

        @empty
            <li>No hay proyectos</li>
        @endforelse
    </ul>



    {{ $itemsTitle->links() }}
@endsection
