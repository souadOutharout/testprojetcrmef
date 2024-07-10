<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnnonceController;
use App\Http\Controllers\ListeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegistreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('homepage');

Route::fallback([ProfilController::class, 'notFound']);

Route::resource('profil',ProfilController ::class);
Route::resource('liste',ListeController ::class);
Route::resource('admin',AdminController ::class);
Route::resource('annonce',AnnonceController ::class);


Route::get('/formateur-Diplom', [ListeController::class, 'listeDiplom'])->name('liste.diplom');
Route::get('/Annonce', [AnnonceController::class, 'AnnoncePub'])->name('Annonce.pub');
Route::post('/Comments', [AnnonceController::class, 'CommentsStore'])->name('comments.store');
Route::get('/annonces', [AnnonceController::class, 'search'])->name('annonces.search');


Route::get('/admin-formateur', [AdminController::class, 'ListFormateur'])->name('ListFormateur');
Route::get('/admin-Reclamation', [AdminController::class, 'ListReclamation'])->name('ListReclamation');
Route::get('/admin-Diplome', [AdminController::class, 'DiplomeCreate'])->name('diplome.create');
Route::post('/formateur-Diplome', [AdminController::class, 'diplome'])->name('ajouter.deplome');
Route::post('/formateur-Etablissement', [AdminController::class, 'etablissement'])->name('ajouter.etablissement');
Route::post('/emploi/update/{id}', [AdminController::class, 'update'])->name('emploi.update');
Route::put('/reclamations/{id}', [AdminController::class, 'UpdateReclamations'])->name('reclamations.update');
Route::put('/users/{id}', [AdminController::class, 'UsersUpdate'])->name('users.update');
Route::delete('/users/{id}', [AdminController::class, 'destroy'])->name('users.destroy');




Route::get('/suivi/formation', [ProfilController::class, 'suivi'])->name('suivi.formation');
Route::get('/reclamation/stagiaire', [ProfilController::class, 'reclamation'])->name('reclamation');
Route::post('/reclamation/stor', [ProfilController::class, 'ReclamationStore'])->name('reclamation.store');
Route::put('/user/{id}', [ProfilController::class, 'ProfilUpdate'])->name('profil.update');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/singin', [LoginController::class, 'store'])->name('singin');
Route::get('/logout', [LoginController::class, 'index'])->name('logout');


Route::get('/register', [RegistreController::class, 'index'])->name('register');
Route::post('/ajouter', [RegistreController::class, 'store'])->name('auth.store');


Route::get('/edit', [LoginController::class, 'update'])->name('update.profile');
Route::post('/edit', [LoginController::class, 'edit'])->name('edit');
