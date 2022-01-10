<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\unsplashController;
use GuzzleHttp\Middleware;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [unsplashController::class,'images'])->name('images');
Route::get('/image/{id}', [unsplashController::class,'image'])->name('image');
Route::get('/download/{id}', [unsplashController::class,'telechargement'])->Middleware('auth')->name('download');
Route::post('/recherche', [unsplashController::class,'recherche'])->name('recherche');
Route::get('/menu/{cat}', [unsplashController::class,'menu'])->name('menu');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
