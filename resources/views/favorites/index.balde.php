@extends('layouts.app')

@section('content')

<h2 class="mb-4">
    Favorite Movies
</h2>

<table class="table table-bordered">

    <thead>
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