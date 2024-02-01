@extends('layouts.app')

@section('main-content')
    <main>
        <h1 class="text-center fw-bold m-3">
            Movies
        </h1>
        
        <div class="container d-flex flex-wrap">
            @foreach ($movies as $movie)
            <article class="card">
                    <h5> <span> Original title: </span>{{ $movie -> original_title }} </h5>
                    <p> <span> Italian title:  </span>{{ $movie -> title}}</p>
                    <p> <span> Release date: </span> {{ $movie -> date}}</p>
                    <p> <span> Vote: </span> {{ $movie -> vote}}</p>
            </article>
            @endforeach
        </div>
    </main>
@endsection