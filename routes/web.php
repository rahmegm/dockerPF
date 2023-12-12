<?php

use App\Http\Controllers\PacoteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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
    return view('home');
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

    Route::get(uri:'/users',action:[UserController::class, 'index'])->name(name: 'users.index');
    Route::get(uri:'/users/create',action:[UserController::class, 'create'])->name(name: 'users.create');
    Route::post(uri:'/users',action:[UserController::class, 'store'])->name(name: 'users.store');
    Route::get(uri:'/users/{user}',action:[UserController::class, 'show'])->name(name: 'users.show');
    Route::get(uri:'/users/{user}/{edit}',action:[UserController::class, 'edit'])->name(name: 'users.edit');
    Route::post(uri:'/users/{user}',action:[UserController::class, 'update'])->name(name: 'users.update');
    Route::delete(uri:'/users/{user}',action:[UserController::class, 'destroy'])->name(name: 'users.destroy');
    
