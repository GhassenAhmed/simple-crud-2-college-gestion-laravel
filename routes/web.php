<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\EdudiantController;
use App\Http\Controllers\EnseignantController;
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
Route::get('/', function () {
    return view('college.index');
});
Route::get('/indexDepartement', function () {
    return view('college.indexDepartement');
});
Route::get('/indexEtudiants', function () {
    return view('college.indexEtudiants');
});
Route::get('/indexEnseignants', function () {
    return view('college.indexEnseignants');
});

Route::resource("/indexDepartement",DepartementController::class);





Route::resource("/indexEnseignants",EnseignantController::class);
