<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//details to show on profile
Route::get('/about', function() {
    return view('details.about');
});
Route::get('/skill', function() {
    return view('details.skill');
});
Route::get('/experience', function() {
    return view('details.experience');
});
Route::get('/portfolio', function() {
    return view('details.portfolio');
});
Route::get('/contact', function() {
    return view('details.contact');
});

require __DIR__.'/auth.php';
