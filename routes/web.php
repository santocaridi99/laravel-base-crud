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
// route che ritorna tutto contenuto data
Route::get("/", "ComicController@index")->name("comics.index");
// route resource che contiene tutte le rotte Crude
Route::resource("comics", "ComicController");