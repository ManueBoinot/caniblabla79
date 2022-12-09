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

// route vers HOME une fois connecté
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route vers PROFIL une fois connecté
Route::get('/user/profil/{user}', [App\Http\Controllers\UserController::class, 'profil'])->name('profil');
// route vers COMPTE une fois connecté
Route::get('/user/compte/{user}', [App\Http\Controllers\UserController::class, 'compte'])->name('compte');
// route vers le formulaire MODIFIER-INFOS une fois connecté
Route::get('/user/modifier-infos/{user}', [App\Http\Controllers\UserController::class, 'modifierInfos'])->name('modifier-infos');
// // route vers le formulaire MODIFIER-PASSWORD une fois connecté
// Route::get('/user/modifier-infos/{user}', [App\Http\Controllers\UserController::class, 'modifierPassword'])->name('modifier-password');
// exécution de UPDATE-PASSWORD une fois connecté
Route::POST('/user/modifier-infos/{user}', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatePassword');
// route vers SUPPRIMER-COMPTE une fois connecté
Route::get('/user/supprimer-compte/{user}', [App\Http\Controllers\UserController::class, 'supprimerCompte'])->name('supprimer-compte');


// passerelles entre utilisateur et controllers
Route::resource('/message', App\Http\Controllers\MessageController::class)->except(['index', 'show']);
Route::resource('/commentaire', App\Http\Controllers\CommentaireController::class)->except(['index', 'show']);
Route::resource('/user', App\Http\Controllers\UserController::class)->except(['index', 'create', 'store']);

