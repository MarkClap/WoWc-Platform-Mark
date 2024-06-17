<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get("/",HomeController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Estudiante
Route::view('/board-students', 'layouts/board-estudents/board');
Route::view('/students-avatar', 'layouts/board-estudents/board-avatar');
Route::view('/students-mision', 'layouts/board-estudents/board-mision');
Route::view('/students-group', 'layouts/board-estudents/board-group');
Route::view('/students-members', 'layouts/board-estudents/board-members');
Route::view('/students-perfil', 'layouts/board-estudents/board-perfil');


// Profesor
Route::view('/board-profesor', 'layouts/board-profesor/board');

// Registro
Route::view('/register-users', 'layouts/register/register-users');
Route::view('/register-institutions', 'layouts/register/register-institutions');
Route::view('/type-users', 'layouts/register/type-users');

// INstitution



// otros

Route::view('/board-test', 'layouts/test-transition-page');
