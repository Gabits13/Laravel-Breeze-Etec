<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'home'])->name('home');

Route::get('/sobre', [ProfileController::class, 'sobrenos'])->name('sobrenos');
Route::get('/contato', [ProfileController::class, 'contato'])->name('contato');
Route::get('/cursos', [ProfileController::class, 'cursos'])->name('cursos');
Route::get('/departamentos', [ProfileController::class, 'departamentos'])->name('departamentos');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
