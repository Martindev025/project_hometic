<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\lenguajeController;

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

/* Languaje */
Route::get('lang/{locale}', [lenguajeController::class, 'setLocale'])->name('setLocale');
/* Fin Languaje */

Route::get('', [HomeController::class, 'index'])->name('home');

Route::post('/mail/store', [FormController::class, 'store'])->name('mail.store');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/acronis', function () {
    return view('acronis');
})->name('acronis');

Route::get('/aliados', function () {
    return view('aliados');
})->name('aliados');

Route::get('/aprovisionamiento', function () {
    return view('aprovisionamiento');
})->name('aprovisionamiento');

Route::get('/archivistico', function () {
    return view('archivistico');
})->name('archivistico');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/consultoria', function () {
    return view('consultoria');
})->name('consultoria');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/gestiondoc', function () {
    return view('gestiondoc');
})->name('gestiondoc');

Route::get('/custodia', function () {
    return view('custodia');
})->name('custodia');

Route::get('/itsm', function () {
    return view('itsm');
})->name('itsm');

Route::get('/monitor', function () {
    return view('monitor');
})->name('monitor');

Route::get('/organizacion', function () {
    return view('organizacion');
})->name('organizacion');

Route::get('/preservacion', function () {
    return view('preservacion');
})->name('preservacion');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/software-pre', function () {
    return view('software-pre');
})->name('software-pre');

Route::get('/soporte', function () {
    return view('soporte');
})->name('soporte');

Route::get('/tickets', function () {
    return view('tickets');
})->name('tickets');

Route::get('/wem', function () {
    return view('wem');
})->name('wem');




// Auth::routes();
