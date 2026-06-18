@extends('layouts.app')

@section('content')

<h2 class="mb-3">
    Favorite Movies
</h2>

<p class="text-muted">
    List of movies saved by user
</p>

<table class="table table-bordered table-hover">

    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Title</th>
            <th>Year</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>

        <tr>
            <td>1</td>
            <td>Avengers Endgame</td>
            <td>2019</td>
            <td>

                <button
                    class="btn btn-danger btn-sm">
                    Delete
                </button>

            </td>
        </tr>

    </tbody>

</table>

@endsection