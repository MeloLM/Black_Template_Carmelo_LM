<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

//ROUTE CONTACT
Route::get('/contact', [PublicController::class, 'contact'])->name('contactUs');
Route::post('/contact/submit', [PublicController::class, 'contact_submit'])->name('contact_submit');

