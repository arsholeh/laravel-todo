@extends('layouts.layouts')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center">Sign In</h2>
                @if (session()->has('LoginError'))                 
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Informasi</strong> {{ session('LoginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
                    </div>
                 @endif

                 @if (session()->has('SuccessRegister'))
                 
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                     <strong>Informasi</strong> {{ session('SuccessRegister') }}
                     <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
                 </div>
 
                 @endif
                <form action="/login" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                    </div>
                    <button type="submit" class="btn btn-dark">Sign In</button>
                </form>
            </div>
        </div>
    </div>

@endsection