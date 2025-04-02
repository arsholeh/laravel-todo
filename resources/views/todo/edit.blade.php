@extends('layouts.layouts')

@section('content')
    <div class="container-fluid mt-5">
        <div>
            <h2>Update Todo</h2>
        </div>
        <hr>
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="/edit/{{ $todo['id'] }}" method="POST">
                    @csrf
                    <div class="row mb-3">
                        <label for="name" class="col-sm-2 col-form-label text-center" >Todo Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" value="{{ $todo['name'] }}">
                        </div>
                        <label for="flexSwitchCheckDefault" class="col-sm-2 col-form-label text-center" >Completed</label>
                        <div class="col-sm-10 mt-2">
                            <div class="form-check form-switch">
                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    id="flexSwitchCheckDefault"
                                    name="complete"
                                    @if ($todo['complete'] == 1)
                                        checked                                        
                                    @endif
                                >
                            </div>
                        </div>        
                      </div>
                      <div class="row mb-3">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-secondary px-4">Update</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>

@endsection