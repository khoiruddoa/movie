@extends('layouts.main')

@section('container')
    <div x-data="{ movies: [] }" x-init="fetch('https://api.themoviedb.org/3/movie/upcoming?api_key=8a2118884115142f50eb7043bf5a2e8b&language=en-US')
        .then(response => response.json())
        .then(data => movies = data)">


        <div class="container text-center">
            <div class="row row-cols-4">
                <template x-for="movie in movies.results">
                    <div class="col">

                        <div class="card" style="width: 18rem;">
                            <img x-bind:src="'https://image.tmdb.org/t/p/w500/' + movie.poster_path" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-text" x-text="movie.title"></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text" x-text="movie.release_date"></p>
                            </div>
                        </div>
                </template>
            </div>
        </div>


    </div>
@endsection
