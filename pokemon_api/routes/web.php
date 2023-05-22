<?php

use App\Http\Controllers\PublicController;
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

Route::get('/', [PublicController::class, 'index'])->name('poke.index');
Route::get('/show/{slug}', [PublicController::class, 'show'])->name('poke.show');
Route::post('/invia', [PublicController::class, 'send'])->name('poke.send');


Route::get('/info', [PublicController::class, 'info'])->name('poke.info');
Route::get('/contact}', [PublicController::class, 'contact'])->name('poke.contact');
