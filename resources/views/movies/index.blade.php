@extends('layouts.app')

@section('main-content')
    <h1>
        Movies
    </h1>

    <ul>
        @forelse ($movies as $movie)
            <li>
                {{ $movie -> title}}
            </li>
        @empty
            <li>
                <p>
                    There are no available movies at the moment.
                </p>
            </li>
        @endforelse

    </ul>

@endsection