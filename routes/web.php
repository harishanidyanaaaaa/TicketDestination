<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
})-> middleware(['auth', 'verified'])->name('profile');




Route::middleware('auth')->group(function () {
    Route::get('/User', [UserController::class, 'index'])->name('User-Index');
    Route::post('/User-Store', [UserController::class, 'store'])->name('User-Store');
    Route::put('/User-Update/{id}', [UserController::class, 'update'])->name('User-Update');
    Route::delete('/User-Delete/{id}', [UserController::class, 'destroy'])->name('User-Delete');
})->middleware(['auth', 'verified'])->name('profile');

require __DIR__.'/auth.php';
