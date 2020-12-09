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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\AccueilController::class, 'home']);
Route::get('apropos', [App\Http\Controllers\AccueilController::class, 'apropos']);
Route::get('categories', [App\Http\Controllers\AccueilController::class, 'categories']);
Route::get('contact', [App\Http\Controllers\AccueilController::class, 'contact']);
Route::get('categorie/{categorie}', [App\Http\Controllers\AccueilController::class, 'categorie'])->name('categorie');
Route::get('resume/{id}', [App\Http\Controllers\AccueilController::class, 'resume'])->name('resume');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('users', App\Http\Controllers\UserController::class);

Route::resource('livres', App\Http\Controllers\LivreController::class);

Route::resource('emprunts', App\Http\Controllers\EmpruntController::class);