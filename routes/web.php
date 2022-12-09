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

// route vers HOME si connecté
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// route vers PROFIL si connecté
Route::get('/user/profil/{user}', [App\Http\Controllers\UserController::class, 'profil'])->name('profil');
// route vers COMPTE
Route::get('/user/compte/{user}', [App\Http\Controllers\UserController::class, 'compte'])->name('compte');
// route vers le formulaire MODIFIER-INFOS
Route::get('/user/modifier-infos/{user}', [App\Http\Controllers\UserController::class, 'modifierInfos'])->name('modifier-infos');
// exécution de UPDATE-PASSWORD
Route::POST('/user/modifier-infos/{user}', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('updatePassword');
// exécution de CREATE MESSAGE
Route::POST('/message/create/{user}', [App\Http\Controllers\MessageController::class, 'createMessage'])->name('createMessage');
// route vers SUPPRIMER-COMPTE 
Route::get('/user/supprimer-compte/{user}', [App\Http\Controllers\UserController::class, 'supprimerCompte'])->name('supprimer-compte');


// passerelles entre utilisateur et controllers
Route::resource('/message', App\Http\Controllers\MessageController::class)->except(['index', 'show']);
Route::resource('/commentaire', App\Http\Controllers\CommentaireController::class)->except(['index', 'show']);
Route::resource('/user', App\Http\Controllers\UserController::class)->except(['index', 'create', 'store']);

