<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TodoController;
use App\Models\Todo;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('todo.index');
});

Route::get('/register', function () {
    return view('todo.register');
});

Route::get('/list', [TodoController::class, 'index']);

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'registrasi']);
Route::post('/register', [AuthController::class, 'createUser']);

Route::get('/create', [TodoController::class, 'create']);
Route::post('/create', [TodoController::class, 'store']);