@extends('layouts.app')

@section('title', 'books')

@section('content')
<section class="container">
    <h1 class="py-3">tutti i libri </h1>
    <div class="row">
        @foreach ($books as $book )
            <div class="col-12 col-md-6 col-lg-2">
                <a href="{{route('books.show', $book->id)}}">
                    <div class="card"> 
                        <img src="{{$book->cover_image}}" class="card-img-top" alt="{{ $book->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->title}}</h5>
                        </div>
                    </div>
                </a>
            </div>

        @endforeach
        
    </div>
</section>

@endsection
