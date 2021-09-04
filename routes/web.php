<?php

use App\Http\Controllers\ComboController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TextController;
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

Route::get('/parties', function () {
    return view('parties');
});

Route::post('/parties', function () {
    return view('parties');
});

Route::get('/events', function () {
    return view('events');
});

Route::post('/events', function () {
    return view('events');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::post('/aboutus', function () {
    return view('aboutus');
});

Route::get('/studio', function () {
    return view('studio');
});

Route::post('/studio', function () {
    return view('studio');
});

Route::get('/honor-society', function () {
    return view('honor-society');
});

Route::post('/honor-society', function () {
    return view('honor-society');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::post('/faq', function () {
    return view('faq');
});

Route::get('/news', function () {
    return view('/news');
});

Route::resource('texts', TextController::class);
Route::resource('photos', PhotoController::class);
Route::resource('tables', TableController::class);
Route::resource('combos', ComboController::class);
Route::resource('programs', ProgramController::class);

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
