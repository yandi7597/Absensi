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
    return view('auth.login');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/user', function () {
    return view('user.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin-page', function() {
    return view('dashboard');
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function() {
    return view('user.index');
})->middleware('role:user')->name('user.page');


Route::resource('rombel', 'RombelController');
Route::resource('rayon', 'RayonController');
Route::resource('students', 'StudentController');
Route::resource('absen', 'AbsenController');
Route::resource('notabsen', 'NotabsenController');
