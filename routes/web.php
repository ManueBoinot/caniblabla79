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

// affiche l'accueil Laravel
Route::get('/', function () {
    return view('welcome');
});

// routes de l'authentification
Auth::routes();

// route une fois connecté
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/message', App\Http\Controllers\MessageController::class)->except(['index', 'show']);
Route::resource('/commentaire', App\Http\Controllers\CommentaireController::class)->except(['index', 'show']);
Route::resource('/user', App\Http\Controllers\UserController::class)->except(['index', 'create', 'store']);
