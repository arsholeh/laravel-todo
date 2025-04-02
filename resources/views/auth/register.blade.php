@extends('layouts.layouts')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Registes New User</h2>
                @if (session()->has('success'))
                 
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Informasi</strong> {{ session('succes') }}
                    <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
                </div>

                @endif
                <form action="register" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="nama" id="name" >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" >
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    {{-- <div class="mb-3">
                        <label for="confirm_password" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirm_password" >
                    </div> --}}
                    <button type="submit" class="btn btn-dark">Register</button>
                </form>
            </div>
        </div>
    </div>

@endsection