<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
#use App\Http\Controllers\LoginController;
use App\Http\Controllers\InstitutionController;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Auth\RegisterInstitution;
use App\Http\Controllers\Auth\LoginController;

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
Route::view('/board-students', 'layouts/board-estudents/board')->name('pedrointo');
Route::view('/students-avatar', 'layouts/board-estudents/board-avatar');
Route::view('/students-mision', 'layouts/board-estudents/board-mision');
Route::view('/students-group', 'layouts/board-estudents/board-group');
Route::view('/students-members', 'layouts/board-estudents/board-members');
Route::view('/students-perfil', 'layouts/board-estudents/board-perfil');


// Profesor
Route::view('/board-profesor', 'layouts/board-profesor/board')->middleware('auth:secondary');

// Registro
Route::view('/register-users', 'layouts/register/register-users');
Route::view('/type-users', 'layouts/register/type-users');

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);


Route::get('register-institution', [RegisterInstitution::class, 'showRegistrationForm'])->name('register.institution');
Route::post('register-institution', [RegisterInstitution::class, 'register'])->name('register.inst');

// INstitution



// otros

Route::view('/board-test', 'layouts/test-transition-page');
