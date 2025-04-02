@extends('layouts.layouts')

@section('content')
    <div class="container-fluid mt-5">
        <div>
            <h2>Create New Todo</h2>
        </div>
        <hr>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="/create" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label text-center" >Todo Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-secondary px-4">Create</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>

@endsection