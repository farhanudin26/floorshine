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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', 'HomeController@index')->name('home');

// Service Pages
Route::get('/services/marble-polishing', 'ServiceController@marble')->name('services.marble');
Route::get('/services/granite-polishing', 'ServiceController@granite')->name('services.granite');
Route::get('/services/homogeneous-tiles-polishing', 'ServiceController@homogeneous')->name('services.homogeneous');
Route::get('/services/parquet-polishing', 'ServiceController@parquet')->name('services.parquet');
Route::get('/services/limestone-polishing', 'ServiceController@limestone')->name('services.limestone');
Route::get('/services/outdoor-ceramic-tiles-polishing', 'ServiceController@outdoor')->name('services.outdoor');
Route::get('/services/porcelain-polishing', 'ServiceController@porcelain')->name('services.porcelain');
Route::get('/services/terrazzo-polishing', 'ServiceController@terrazzo')->name('services.terrazzo');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/faq', 'HomeController@faq')->name('faq');
Route::get('/blog', 'HomeController@blog')->name('blog');
Route::get('/whatsapp', 'HomeController@whatsapp')->name('whatsapp');