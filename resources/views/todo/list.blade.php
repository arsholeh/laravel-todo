@extends('layouts.layouts')

@section('content')
<div class="container mt-4">
    <h2>Todo List</h2>

        <a href="/create">
            <button class="btn btn-primary mb-3">Add New Todo</button>
        </a>
    
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
                    <td>Pending</td>
                @endif
                <td>
                    <button class="btn btn-success mb-3">Complete</button>
                    <button class="btn btn-danger mb-3">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection