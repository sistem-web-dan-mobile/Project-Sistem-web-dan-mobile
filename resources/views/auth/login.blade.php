@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Login MovieHub</h3>
            </div>

            <div class="card-body">

                <form>

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
                        class="btn btn-primary">
                        Login
                    </button>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection