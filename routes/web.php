<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\EnquiryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

// Service Pages
Route::get('/services/marble-polishing', [ServiceController::class, 'marble'])->name('services.marble');
Route::get('/services/granite-polishing', [ServiceController::class, 'granite'])->name('services.granite');
Route::get('/services/homogeneous-tiles-polishing', [ServiceController::class, 'homogeneous'])->name('services.homogeneous');
Route::get('/services/parquet-polishing', [ServiceController::class, 'parquet'])->name('services.parquet');
Route::get('/services/limestone-polishing', [ServiceController::class, 'limestone'])->name('services.limestone');
Route::get('/services/outdoor-ceramic-tiles-polishing', [ServiceController::class, 'outdoor'])->name('services.outdoor');
Route::get('/services/porcelain-polishing', [ServiceController::class, 'porcelain'])->name('services.porcelain');
Route::get('/services/terrazzo-polishing', [ServiceController::class, 'terrazzo'])->name('services.terrazzo');

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/whatsapp', [HomeController::class, 'whatsapp'])->name('whatsapp');

Route::post('/booking-enquiry', [BookingController::class, 'send'])->name('booking.send');
Route::post('/enquiry', [EnquiryController::class, 'send'])->name('enquiry.send');
