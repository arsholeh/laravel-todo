<?php

use App\Http\Controllers\AuthController;
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


Route::get('/register', function () {
    return view('todo.register');
});

Route::get('/list', function () {
    return view('todo.list');
});

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'registrasi']);
Route::post('/register', [AuthController::class, 'createUser']);
