@extends('layouts.main')
@section('container')
    <div x-data="{
        movie: [],
        id: @js($id)
    }" x-init="fetch('https://api.themoviedb.org/3/movie/' + id + '?api_key=8a2118884115142f50eb7043bf5a2e8b&language=en-US')
        .then(response => response.json())
        .then(data => movie = data)">


        <div class="container text-center">
            <div class="row row-cols-4">

                <div class="col">

                    <div class="card mb-4" style="width: 18rem;">
                        <img x-bind:src="'https://image.tmdb.org/t/p/w500/' + movie.poster_path" class="card-img-top"
                            alt="...">
                        <div class="card-body">
                            <p class="card-text" x-text="movie.title"></p>
                        </div>
                        <div class="card-body">
                            <p class="card-text" x-text="movie.overview"></p>

                        </div>
                        <div class="card-body">
                            <p class="card-text" x-text="movie.release_date"></p>

                        </div>
                        <div class="card-body">
                            <p class="card-text" x-text="movie.status"></p>

                        </div>
                    </div>

                </div>
            </div>


        </div>
    @endsection
