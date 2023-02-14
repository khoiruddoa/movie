@extends('layouts.main')
@section('container')
    <div>
        <h1>Kategori : {{ $kategori->name }}</h1>
    </div>
    <div x-data="{
        movies: [],
        api: @js($kategori->api)
    }" x-init="fetch('https://api.themoviedb.org/3/movie/' + api + '?api_key=8a2118884115142f50eb7043bf5a2e8b&language=en-US')
        .then(response => response.json())
        .then(data => movies = data)">


        <div class="container text-center">
            <div class="row row-cols-4">
                <template x-for="movie in movies.results">
                    <div class="col">

                        <div class="card mb-4" style="width: 18rem;">
                            <img x-bind:src="'https://image.tmdb.org/t/p/w500/' + movie.poster_path" class="card-img-top"
                                alt="...">
                            <div class="card-body">
                                <p class="card-text" x-text="movie.title"></p>
                            </div>
                            <div class="card-body">
                                <p class="card-text" x-text="movie.release_date"></p>
                            </div>
                            <div><a x-bind:href="'/detail/' + movie.id">detail</a></div>
                        </div>
                </template>
            </div>
        </div>


    </div>
@endsection
