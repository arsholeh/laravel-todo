@extends('layouts.layouts')

@section('content')
    <section id="berita" class="mt-5">
        <div class="container text-center mt-5">
            @if (session()->has('LogoutSuccess'))
                 
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Informasi</strong> {{ session('LogoutSuccess') }}
                <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
            </div>
    
            @endif
            <h1>Welcome to Laravel ToDo App</h1>
            <p class="mt-5">For any query please contact</p>
            <h4>Abdul</h4>
        </div>
    </section>
@endsection