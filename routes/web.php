<?php

use App\Http\Controllers\ComboController;
use App\Http\Controllers\DanceController;
use App\Http\Controllers\HeadingController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\TextController;
use App\Models\Program;
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

Route::get('/calendar', function () {
    return view('calendar');
});

Route::post('/calendar', function () {
    return view('calendar');
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

Route::get('/registration', function () {
    return view('registration');
});

//Route::post('/faq', function () {
//    return view('faq');
//});

Route::get('/recital', function () {
    return view('/recital');
});

Route::get('/dress-code', function () {
    return view('/dress-code');
});

//Route::get('studio-livestream', function () {
//    return view('studio-livestream');
//});
//
//Route::post('studio-livestream', function () {
//    return view('studio-livestream');
//});

Route::resource('texts', TextController::class);
Route::resource('photos', PhotoController::class);
Route::resource('tables', TableController::class);
Route::resource('combos', ComboController::class);
Route::resource('programs', ProgramController::class);
Route::resource('headings', HeadingController::class);

Route::get('/programs/{program:slug}', function (Program $program) {
    return view('programs.show', compact('program'));
});
Route::post('/programs/{program:slug}', function (Program $program) {
    return $program;
});

//Route::post('/programs', function () {
//    App\Models\Program::create(['programTitle' => request('programTitle')]);
//    return redirect()->back();
//});

Route::get('contact', 'App\Http\Controllers\ContactUsController@create')->name('contact.create');
Route::post('contact', 'App\Http\Controllers\ContactUsController@store')->name('contact.store');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/upload-form', [DanceController::class, 'showUploadForm'])->name('showUploadForm');
Route::post('/import-dance-classes', [DanceController::class, 'importDanceClasses'])->name('importDanceClasses');
Route::get('/schedule', [DanceController::class, 'showForm'])->name('schedule');
Route::match(['get', 'post'], '/filter', [DanceController::class, 'filterClasses'])->name('filter');
Route::get('/download-favorites', [DanceController::class, 'downloadFavorites'])->name('downloadFavorites');
Route::match(['get', 'post'], '/processFavorites', [DanceController::class, 'processFavorites'])->name('processFavorites');
Route::post('/sendFavoritesEmail', [DanceController::class, 'sendFavoritesEmail'])->name('sendFavoritesEmail');
