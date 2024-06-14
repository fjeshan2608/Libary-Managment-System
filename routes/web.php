<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ClientController;
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
});

require __DIR__ . '/auth.php';
Route::get('/', [BookController::class, 'home'])->name('book.home');
Route::get('logout', [AuthController::class, 'destroy']);
Route::get('/Book-Index', [BookController::class, 'index'])->name('book.form');
Route::get('/Book-Table', [BookController::class, 'all'])->name('book.all');
Route::post('/Book-Add-Submit', [BookController::class, 'add'])->name('book.add');
Route::post('/Book-Form-Update', [BookController::class, 'update'])->name('form.update');
Route::get('/Book-edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::get('/Book-del/{id}', [BookController::class, 'del'])->name('book.del');

Route::get('/Client-Index', [ClientController::class, 'index'])->name('client.info');
Route::post('/Client-Form', [ClientController::class, 'add'])->name('add.client.form');

