@extends('layouts.app')

@section('title', 'movies')

@section('content')
<section class="container">
    <h1 class="py-3">tutti i film</h1>
    <div class="row">
        @foreach ($movies as $movie )
            <div class="col-12 col-md-6 col-lg-2">
                <a href="{{route('movies.show', $movie->id)}}">
                    <div class="card"> 
                        <img src="{{$movie->image}}" class="card-img-top" alt="{{ $movie->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie->title}}</h5>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach
        
    </div>
</section>

@endsection
