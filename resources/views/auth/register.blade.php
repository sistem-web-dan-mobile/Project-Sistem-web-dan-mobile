@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                <h3>Register</h3>
            </div>

            <div class="card-body">

    <p class="text-muted">
        Create your MovieHub account
    </p>

    <form>

        <div class="mb-3">
            <label>Nama</label>
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Masukkan Nama">
                    </div>

                    <div class="mb-3">
                        <label>Email</label>
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Masukkan Email">
                    </div>

                    <div class="mb-3">
                        <label>Password</label>
                        <input
                            type="password"
                            class="form-control"
                            placeholder="Masukkan Password">
                    </div>

                    <button
                        type="submit"
                        class="btn btn-success">
                        Register
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection