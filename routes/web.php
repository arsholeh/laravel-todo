<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('todo.index');
});


Route::get('/login', function () {
    return view('todo.login');
});
