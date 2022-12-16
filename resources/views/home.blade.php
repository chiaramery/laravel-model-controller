@extends('layouts.app')

@section('content')
    <section>

        <h2 class="text-center">Film:</h2>
        <ul class="row row-cols-5">
            @foreach ($movies as $movie)
                <li class="card col">
                    <img src="{{ $movie->image }}" alt="{{ $movie->title }}">
                    <h3>{{ $movie->title }}</h3>
                    <p>Titolo originale: {{ $movie->original_title }}</p>
                    <span>Voto: {{ $movie->vote }}</span>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
