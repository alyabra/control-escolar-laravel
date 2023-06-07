<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AvisoController;
use App\Http\Controllers\ClaseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SemestreController;
use App\Http\Controllers\EstudianteController;

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
Route::get('/clases/{clase}', [ClaseController::class, 'show'])->middleware(['auth','rol'])->name('clases.show');
Route::get('/clases/edit/{clase}', [ClaseController::class, 'edit'])->middleware(['auth','rol'])->name('clases.edit');

Route::get('/clases/tareas', [ClaseController::class, 'tareas'])->name('clases.tareas');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Vista de alumno
Route::get('profile/{user}', [EstudianteController::class, 'index'])->middleware(['auth'])->name('cardex.index');

// Crear avisos
// TODOS: los metodos post requieren un middeware?
Route::post('/avisos/create', [AvisoController::class, 'store'])->name('avisos.store');
Route::get('/avisos', [AvisoController::class, 'index'])->middleware(['auth','rol'])->name('avisos.index');

// Rutas de semestres
Route::middleware('auth')->group(function () {
    Route::get('/semestres', [SemestreController::class, 'index'])->middleware(['auth'])->name('semestre.index');
    Route::get('/semestres/create', [SemestreController::class, 'create'])->middleware(['rol'])->name('semestre.create');
    Route::post('/semestres/create', [SemestreController::class, 'store'])->middleware(['rol'])->name('semestre.store');
    Route::get('/semestres/{semestre}', [SemestreController::class, 'show'])->name('semestre.show');
    Route::get('/semestres/edit/{semestre}', [SemestreController::class, 'edit'])->middleware(['rol'])->name('semestre.edit');
});


require __DIR__.'/auth.php';
