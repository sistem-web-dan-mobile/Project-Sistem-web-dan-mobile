@extends('layouts.app')

@section('content')

<h2 class="mb-4">Search Movie</h2>

<form class="mb-4">
    <div class="input-group">
        <input
            type="text"
            class="form-control"
            placeholder="Cari film...">

        <button
            class="btn btn-primary">
            Search
        </button>
    </div>
</form>

<div class="row">

    <div class="col-md-3 mb-4">
        <div class="card h-100">

            <img
                src="https://via.placeholder.com/300x450"
                class="card-img-top"
                alt="Movie">

            <div class="card-body">
                <h5 class="card-title">
                    Avengers Endgame
                </h5>

                <p class="card-text">
                    2019
                </p>

                <a href="#"
                   class="btn btn-primary btn-sm">
                    Detail
                </a>

            </div>
        </div>
    </div>

</div>

@endsection