<?php

use App\Http\Controllers\ClaseController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// clases.index
Route::get('/clases', [ClaseController::class, 'index'])->middleware(['auth','rol'])->name('clases.index');
// TODO que reciba el id de la clase
Route::get('/clases/tareas', [ClaseController::class, 'tareas'])->name('clases.tareas');
Route::get('/clases/create', [ClaseController::class, 'create'])->middleware(['auth'])->name('clases.create');
Route::get('/clases/{clase}', [ClaseController::class, 'show'])->middleware(['auth','rol'])->name('clases.show');

Route::get('/clases/tareas', [ClaseController::class, 'tareas'])->name('clases.tareas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Vista de alumno
Route::get('profile/{user}', [EstudianteController::class, 'index'])->name('cardex.index');

require __DIR__.'/auth.php';
