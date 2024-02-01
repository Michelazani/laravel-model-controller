<?php

use Illuminate\Support\Facades\Route;
// importo controller 
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// inserisco controller e nome del metodo. utente arriva al link, viene tradotto e reindirizzato a url. viene tradotto e rimandato al metodo index del controller
Route::get('/', [PageController::class, 'index']);
