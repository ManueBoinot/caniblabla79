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
// route vers SUPPRIMER-COMPTE 
Route::get('/user/supprimer-compte/{user}', [App\Http\Controllers\UserController::class, 'supprimerCompte'])->name('supprimer-compte');
// exécution de UPDATE-MESSAGE
Route::PATCH('/message/update/{message}', [App\Http\Controllers\MessageController::class, 'update'])->name('message.update');
// exécution de UPDATE-COMMENTAIRE
Route::PATCH('/commentaire/update/{commentaire}', [App\Http\Controllers\CommentaireController::class, 'update'])->name('commentaire.update');
// exécution de RECHERCHE MESSAGES
Route::get('/user/messages-recherche', [App\Http\Controllers\MessageController::class,'index'])->name('messages-recherche');


// passerelles entre utilisateur et controllers
Route::resource('/user', App\Http\Controllers\UserController::class)->except(['index', 'create', 'store']);
Route::resource('/message', App\Http\Controllers\MessageController::class)->except(['index', 'show', 'update']);
Route::resource('/commentaire', App\Http\Controllers\CommentaireController::class)->except(['index', 'show', 'update']);

