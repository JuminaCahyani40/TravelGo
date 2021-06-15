<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaranController;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/daftar_wisata/wisatasatu', function () {
	return view('/daftar_wisata/wisatasatu');
});
Route::post('/daftar_wisata/wisatasatu', [SaranController::class, 'addData']);

Route::get('/daftar_wisata/wisatadua', function () {
	return view('/daftar_wisata/wisatadua');
});
Route::get('/daftar_wisata/wisatatiga', function () {
	return view('/daftar_wisata/wisatatiga');
});
Route::get('/daftar_wisata/wisataempat', function () {
	return view('/daftar_wisata/wisataempat');
});
Route::get('/daftar_wisata/wisatalima', function () {
	return view('/daftar_wisata/wisatalima');
});
Route::get('/daftar_wisata/wisataenam', function () {
	return view('/daftar_wisata/wisataenam');
});
Route::get('/daftar_wisata/wisatatujuh', function () {
	return view('/daftar_wisata/wisatatujuh');
});
Route::get('/daftar_wisata/wisatadelapan', function () {
	return view('/daftar_wisata/wisatadelapan');
});
Route::get('/daftar_wisata/wisatasembilan', function () {
	return view('/daftar_wisata/wisatasembilan');
});