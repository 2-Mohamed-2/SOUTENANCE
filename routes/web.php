<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SectController;
use App\Http\Controllers\CarteController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\MembreController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\InconnuController;
<<<<<<< HEAD
use App\Http\Controllers\ResidenceController;
=======
use App\Http\Controllers\passchangeController;
use App\Http\Controllers\ProfilController;

>>>>>>> a64312140cf531a6416adcaab2520536d2efdd3b
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

// Route::get('/', function () {
//     //dd(Auth::user()->isActive == false);
//     return ("Bonjour svous êtes sur l'interface d'acueil !!");    
// })->middleware(['auth'])->name('dashboard');



Route::middleware(['auth', 'role:supreme'])->group(function() {

    // Route::get('/Med', function () {
    // return ("Bonjour svous êtes sur l'interface de test !!");
    // })->name('test');

    // Mdp Change
    // Route::get('/Med', [passchangeController::class, 'index'])->name('test');

    // Vue index
    Route::get('/Accueil', [AccueilController::class, 'index'])->name('index');

    // Routes pour le crud du commissariat  
    Route::resource('/Commissariat', ComController::class);

    // Routes pour le crud des Membres
    Route::resource('/Membre', MembreController::class);

    // Routes pour le crud des sections
    Route::resource('/Section', SectController::class);

    //Routes pour le crud des grades
    Route::resource('/Grade', GradeController::class);

    //Routes pour le crud des Roles
    Route::get('/RoleFetch', [RoleController::class, 'fetchrole']);
    Route::resource('/Role', RoleController::class);

    //Routes pour le crud !!!
    Route::resource('/Inconnu', InconnuController::class);
   
    //Routes pour Carte !!!
    Route::resource('/Carte', CarteController::class);
    Route::get('/downloadPDF/{id}',[App\Http\Controllers\CarteController::class, 'downloadPDF'])->name('downloadPDF');

<<<<<<< HEAD
    Route::get('/downloadPDF/{id}',[App\Http\Controllers\CarteController::class, 'downloadPDF'])->name('downloadPDF');

      //Routes pour Certifica!!!
    Route::resource('/Residence', ResidenceController::class);

    Route::get('/downloadPDF/{id}',[App\Http\Controllers\ResidenceController::class, 'downloadPDF'])->name('downloadPDF');
=======
    //Pour le profil
    Route::get('/Profil', [ProfilController::class, 'index'])->name('profilvue');
>>>>>>> a64312140cf531a6416adcaab2520536d2efdd3b
});




require __DIR__.'/auth.php';