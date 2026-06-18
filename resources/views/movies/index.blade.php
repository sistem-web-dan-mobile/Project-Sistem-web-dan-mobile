@extends('layouts.app')

@section('content')

<h2 class="mb-4">Search Movie</h2>

<form>
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

@endsection