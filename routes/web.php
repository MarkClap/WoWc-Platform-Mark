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

Route::view('/board', 'layouts/board');
Route::view('/board-opcion-avatar', 'layouts/board-opcion-avatar');
Route::view('/board-opcion-mision', 'layouts/board-opcion-mision');
Route::view('/board-opcion-group', 'layouts/board-opcion-group');
Route::view('/board-opcion-members', 'layouts/board-opcion-members');

Route::view('/board2', 'layouts/board2');

Route::view('/board-test', 'layouts/test-transition-page');
