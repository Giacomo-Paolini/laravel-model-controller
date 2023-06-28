@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1 class="mb-3">Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div class="d-flex flex-wrap gap-3">
                @foreach ($movies as $movie)
                <div class="card p-3">
                    <h1>{{ $movie->title}}</h1>
                    <small>{{ $movie->original_title}}</small>
                    <p>{{ $movie->nationality}}</p>
                    <small>{{ $movie->date}}</small>
                    <h3>{{ $movie->vote}}</h3>
                </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection