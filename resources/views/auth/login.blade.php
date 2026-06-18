@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow">

            <div class="card-header bg-primary text-white">
                <h3 class="text-center mb-0">
                    Login MovieHub
                </h3>
            </div>

            <div class="card-body">

                <p class="text-muted text-center">
                    Welcome back to MovieHub
                </p>

                <form>

                    <div class="mb-3">
                        <label class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            class="form-control"
                            placeholder="Masukkan Email">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">
                            Password
                        </label>

                        <input
                            type="password"
                            class="form-control"
                            placeholder="Masukkan Password">
                    </div>

                    <div class="d-grid">
                        <button
                            type="submit"
                            class="btn btn-primary">
                            Login
                        </button>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>

@endsection