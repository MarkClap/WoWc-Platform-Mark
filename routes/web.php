<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
#use App\Http\Controllers\LoginController;
use App\Http\Controllers\InstitutionController;
use GuzzleHttp\Promise\Create;
use App\Http\Controllers\Auth\RegisterInstitution;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TeacherController;

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

//Institutions
Route::view('/board-institutions', 'layouts/board-institutions/board');



// Estudiante
Route::view('/board-students', 'layouts/board-estudents/board');
Route::view('/students-avatar', 'layouts/board-estudents/board-avatar');
Route::view('/students-mision', 'layouts/board-estudents/board-mision');
Route::view('/students-mision2', 'layouts/board-estudents/board-mision2');
Route::view('/students-quizzes', 'layouts/board-estudents/board-quizzes');
Route::view('/students-quizzes-exam', 'layouts/board-estudents/board-quizzes-exam');

Route::view('/students-group', 'layouts/board-estudents/board-group');
Route::view('/students-members', 'layouts/board-estudents/board-members');
Route::view('/students-perfil', 'layouts/board-estudents/board-perfil');
Route::view('/students-home', 'layouts/board-estudents/board-home');
Route::view('/students-create-avatar', 'layouts/board-estudents/create-avatar');

// Profesor 
Route::view('/profesor-create-clase', 'layouts/board-profesor/board-create-clase');


// Profesor pruebas con middleware 
Route::view('/board-profesor', 'layouts/board-profesor/board')->middleware('auth:secondary');

// Registro
Route::view('/register-users', 'layouts/register/register-users');
Route::view('/type-users', 'layouts/register/type-users');

//login rutas
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// INstitution register
Route::get('register-institution', [RegisterInstitution::class, 'showRegistrationForm'])->name('register.institution');
Route::post('register-institution', [RegisterInstitution::class, 'register'])->name('register.inst');


// otros
Route::resource('teachers', TeacherController::class)->middleware('auth:secondary');
Route::view('/board-test', 'layouts/test-transition-page');
