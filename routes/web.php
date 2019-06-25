<?php

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
    return view('beranda');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ukm', 'UKMController@index');
Route::get('/ukm/{id}', 'UKMController@show');
Route::get('/berita', 'BeritaController@index');
Route::get('/berita/{id}', 'BeritaController@show');
Route::get('/agenda', 'AgendaController@index');
Route::get('/agenda/{id}', 'AgendaController@show');
Route::get('/registrasi', 'RegistrasiController@create');
Route::post('/daftar', 'RegistrasiController@store')->name('daftar');


Route::get('/charts', 'ty@charts');
Route::get('/dashboardukm', 'ty@dashboardukm');
Route::get('/icons', 'ty@icons');
Route::get('/index', 'ty@index');
Route::get('/notifications', 'ty@notifications');
Route::get('/pagelockscreen', 'ty@pagelockscreen');
Route::get('/pagelogin', 'ty@pagelogin');
Route::get('/pageprofile', 'ty@pageprofile');
Route::get('/panels', 'ty@panels');
Route::get('/tables', 'ty@tables');
Route::get('/typography', 'ty@typography');


Route::get('/beranda', 'ty@beranda');
Route::get('/galeri', 'ty@galeri');
Route::get('/tentang', 'ty@tentang');




Route::get('/daftarukm', 'ty@daftarukm');

Route::get('/perisaidiri', 'ty@perisaidiri');
Route::get('/galeriisi', 'ty@galeriisi');

Route::get('/masuk', 'ty@masuk');
