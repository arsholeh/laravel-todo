@extends('layouts.layouts')

@section('content')
<div class="container mt-4">
    <h2>Todo List</h2>

        <a href="/create">
            <button class="btn btn-primary mb-3">Add New Todo</button>
        </a>
     
    @if (session()->has('success'))
                 
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Informasi</strong> {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss='alert' aria-label="close"></button>
        </div>

     @endif
    
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ToDo Name</th>
                <th>Completed</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($todos as $todo)           
            <tr>
                <td>{{ $todo['name'] }}</td>
                @if ($todo['complete'] == 0)
                    <td>Pending</td>
                @else
                    <td>Completed</td>
                @endif
                <td>
                    <a href="/edit/{{ $todo['id'] }}" class="btn btn-success mb-3">Edit</a>
                    <form action="/delete/{{ $todo['id'] }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger mb-3">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection