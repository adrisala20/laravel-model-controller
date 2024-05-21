@extends('layouts.app')

@section('title', 'movies')

@section('content')
<section id="movie-show" class="container">
    <h1>{{ $movie->title}} </h1>
    <p class="py-4 fs-4 fw-bold text-center "> Titolo originale: {{ $movie->original_title}}</p>  
    <div class="img-show">
        <img src="{{$movie->image}}" alt="{{ $movie->title}}">
    </div>
 
</section>

@endsection
