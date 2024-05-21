@extends('layouts.app')

@section('title', 'movies')

@section('content')
<section id="movie-show" class="container">
    <h1>{{ $book->title}} </h1>
    <p class="py-4 fs-4 fw-bold text-center "> descrizione {{ $book->plot}}</p>  
    <div class="img-show">
        <img src="{{$book->cover_image}}" alt="{{ $book->title}}">
    </div>
 
</section>

@endsection
