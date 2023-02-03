<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\EtudiantController;

Route::get('/', [EtudiantController::class, 'index'])->name('index');
Route::get('/blog', [EtudiantController::class, 'index'])->name('index');

Route::get('blog/{etudiant}', [EtudiantController::class, 'show'])->name('show');

Route::get('blog-create', [EtudiantController::class, 'create'])->name('create');
Route::post('blog-create', [EtudiantController::class, 'store'])->name('store');

Route::get('blog-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('edit');
Route::put('blog-edit/{etudiant}', [EtudiantController::class, 'update'])->name('update');

Route::delete('blog-edit/{etudiant}', [EtudiantController::class, 'destroy'])->name('destroy');

// Test Eloquent
Route::get('query', [EtudiantController::class, 'query']);
Route::get('page', [EtudiantController::class, 'page']);