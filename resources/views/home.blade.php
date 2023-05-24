@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Welcome to Movies Home</h3>
    <div class="row row-cols-1 row-cols-lg-3"></div>
    @forelse ($movies as $movie)
        <div class="col">
            <div class="card">
                <h3>{{ $movie->title }}</h3>
            </div>
        </div>
    @empty
        
    @endforelse
</div>

@endsection