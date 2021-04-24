<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\accueilController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\dashboardController;
// use App\Http\Controllers\CategorieController;





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


Route::get('/', [accueilController::class, 'index']);
Route::get('/contact_nous', [contactController::class, 'contact_nous']);
Route::get('/dashboard', [dashboardController::class, 'dashboard']);


Route::resource('categories','App\Http\Controllers\CategorieController');






//  Route::get('/add-category-produits', [dashboardController::class, 'add-category-produits']);
// -------au niveau des ajout dans le dashboard j'ai pas cree ceux la leur controleur
// Route::get('/add-categ', function () {
//     return view('admin/add-categ');

// });

// ---
// Route::get('/voir-categ', function () {
//     return view('admin/voir-categ');

// });


