@extends('layouts.layouts')

@section('content')
<div class="container mt-4">
    <h2>Todo List</h2>
    <button class="btn btn-primary mb-3">Add New Todo</button>
    
    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ToDo Name</th>
                <th>Completed</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection