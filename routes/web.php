<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;
use App\Http\Controllers\ReportsController;
use App\Livewire\Examples\Example1;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

/* Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); */
//Route::resource('asignaturas', SubjectController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//REPORTES
Route::get('cardex/{estudiante}', [ReportsController::class, 'print_cardex'])->name('students.cardex');

//crud
Route::get('students', [StudentController::class, 'index'])->name('estudiantes');

//detalles
Route::resource('estudiantes', StudentController::class);
Route::put('/estudiantes/{id}', [StudentController::class, 'update']);



//formulario
Route::resource('formulario', Form::class);

//editar

//eliminar

Route::get('livewire', Example1::class);