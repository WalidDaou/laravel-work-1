<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

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

// Route::get('/', function () {
//     return view('welcome');
// });



// Route::get('/home',function () {
// return view ('pages.home');
// });

Route::get('/', [ProjectController::class, 'index']);
Route::get('/contact-us', [ProjectController::class, 'contact']);
Route::get('/faqs', [ProjectController::class, 'faqs']);
Route::post('/contact-us', [ProjectController::class, 'submit'])->name('contact.submit');
