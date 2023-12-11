<?php

use App\Http\Controllers\PacoteController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/pacotes', [PacoteController::class, 'index'])->name('pacotes.index');
Route::get('/pacotes/criar', [PacoteController::class, 'create'])->name('pacotes.create');
Route::get('/pacotes/{id}', [PacoteController::class, 'show'])->name('pacotes.show');
Route::post('/pacotes', [PacoteController::class, 'store'])->name('pacotes.store');
Route::get('/pacotes/{id}/editar', [PacoteController::class, 'edit'])->name('pacotes.edit');
Route::put('/pacotes/{id}', [PacoteController::class, 'update'])->name('pacotes.update');
Route::delete('/pacotes/{id}', [PacoteController::class, 'destroy'])->name('pacotes.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';