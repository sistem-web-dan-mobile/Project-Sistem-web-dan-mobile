@extends('layouts.app')

@section('content')

<div class="row mb-4">

    <div class="col-md-12">

        <h2 class="text-center">
            Search Movie
        </h2>

        <p class="text-center text-muted">
            Find your favorite movies instantly
        </p>

        <form>
            <div class="input-group">

                <input
                    type="text"
                    class="form-control"
                    placeholder="Search movie title...">

                <button
                    class="btn btn-primary">
                    Search
                </button>

            </div>
        </form>

    </div>

</div>

<div class="row">

    <div class="col-md-3 mb-4">

        <div class="card h-100 shadow-sm">

            <img
                src="https://via.placeholder.com/300x450"
                class="card-img-top"
                alt="Movie Poster">

            <div class="card-body">

                <h5 class="card-title">
                    Avengers Endgame
                </h5>

                <p class="card-text text-muted">
                    2019
                </p>

                <a
                    href="#"
                    class="btn btn-primary btn-sm">
                    View Detail
                </a>

            </div>

        </div>

    </div>

</div>

@endsection