<?php


use App\Http\Controllers\ProprieteController;
use App\Models\Propriete;
use App\Http\Controllers\ProprietaireController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



//La route pour toutes les methode de la propriete
Route::get('proprietes',[ProprieteController::class,'lister']);
Route::get('proprietes/ajouter',[ProprieteController::class,'ajouter']);
Route::post('proprietes/enregistrer',[ProprieteController::class,'enregistrer']);
//Fin route pour les propriete
require __DIR__ . '/auth.php';
