<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get("/", HomeController::class);

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

Route::prefix('main')->group(function () {
    Route::prefix('player')->controller(PlayerController::class)->group(function () {

        Route::get('/', function () {
            return redirect('/main/player/character');
        })->name('player');

        Route::get('/create-character', 'createCharacter')->name('player.create-character');
        Route::get('/character', 'character')->name('player.character');
        Route::get('/groups', 'groups')->name('player.groups');
        Route::get('/members', 'members')->name('player.members');
        Route::get('/quests', 'quests')->name('player.quests');
    });
});

Route::view('/students-mision2', 'layouts/board-estudents/board-mision2');
Route::view('/students-quizzes', 'layouts/board-estudents/board-quizzes');
Route::view('/students-quizzes-exam', 'layouts/board-estudents/board-quizzes-exam');
//Unused
Route::view('/students-perfil', 'layouts/board-estudents/board-perfil');
Route::view('/students-home', 'layouts/board-estudents/board-home');

//! Teacher/Master
Route::view('/profesor-create-clase', 'layouts/board-profesor/board-create-clase');

// Profesor pruebas con middleware
Route::view('/board-profesor', 'layouts/board-profesor/board')->middleware('auth:secondary');

// Register
Route::view('/register-users', 'layouts/register/register-users');
Route::view('/type-users', 'layouts/register/type-users');

// Login
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

// Institution register
Route::view('/register-institution', 'layouts.register.register-institutions')->name('register.inst');

// otros
Route::resource('teachers', TeacherController::class)->middleware('auth:secondary');

//test-quizzes
Route::get('/quizzes', [QuizController::class, 'index'])->name('indexquiz');
Route::get('/quizzes/result', [QuizController::class, 'result'])->name('quizzes.score');
Route::post('/quizzes/check', [QuizController::class, 'check'])->name('quizzes.check');
