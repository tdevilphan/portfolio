<?php

use App\Http\Controllers\ContactUsFormController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'homepage']);

Route::post('/contact', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');

Route::get('/category/{slug}', [\App\Http\Controllers\CategoryController::class, 'getCategoryPage']);

Route::get('/not-found', function () {
  return view('not-found');
})->name('not-found');

Route::get('/project/detail', function () {
  return view('detail');
});
