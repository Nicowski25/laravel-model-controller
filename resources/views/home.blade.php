@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Welcome to Movies Home</h3>
    <div class="row row-cols-3 row-cols-lg-3 g-3">

        @forelse ($movies as $movie)
        <div class="col">
            <div class="card h-100">
                <h3>{{ $movie->title }}</h3>
                <p>{{ $movie->original_title }}</p>
                <p>{{ $movie->nationality }}</p>
                <p>{{ $movie->date }}</p>
                <p>{{ $movie->vote }}</p>
            </div>
        </div>
        @empty
        <div class="col">
            <h4>No movies found</h4>
        </div>    
        @endforelse
    </div>
</div>

@endsection