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

Route::get('/', 'HomeController@index');

Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ukm', 'UKMController@index');
Route::get('/ukm/{id}', 'UKMController@show');
Route::get('/berita', 'BeritaController@index');
Route::get('/berita/{id}', 'BeritaController@show');
Route::get('/agenda', 'AgendaController@index');
Route::get('/agenda/{id}', 'AgendaController@show');
Route::get('/registrasi', 'RegistrasiController@create');
Route::post('/daftar', 'RegistrasiController@store')->name('daftar');


// Admin BEM
Route::get('/adminbem', 'ty@adminbem')->middleware('auth');

Route::get('/dashboardbem', 'DashboardbemController@index')->middleware('auth');
Route::post('/dashbem', 'DashboardbemController@store')->name('dashbem')->middleware('auth');

Route::get('/dashboardbemukm', 'DashboardbemukmController@index')->middleware('auth');
Route::post('/dashbemukm', 'DashboardbemukmController@store')->name('dashbemukm')->middleware('auth');
Route::get('/editukm/{id}', 'DashboardbemukmController@edit')->middleware('auth');
Route::put('/updateukm/{id}', 'DashboardbemukmController@update');
Route::get('/deleteukm/{id}', 'DashboardbemukmController@destroy')->name('deleteukm')->middleware('auth');

Route::get('/dashboardbemberita', 'DashboardbemberitaController@index')->middleware('auth');
Route::post('/dashbemberita', 'DashboardbemberitaController@store')->name('dashbemberita')->middleware('auth');
Route::get('/formbemberita', 'ty@formbemberita');
Route::get('/editberita/{id}', 'DashboardbemberitaController@edit')->middleware('auth');
Route::post('/updateberita/{id}', 'DashboardbemberitaController@update');
Route::get('/deleteberita/{id}', 'DashboardbemberitaController@destroy')->name('deleteberita')->middleware('auth');
Route::get('/acceptberita/{id}', 'BeritaController@accept')->name('acceptberita')->middleware('auth');
Route::get('/rejectberita/{id}', 'BeritaController@reject')->name('rejectberita')->middleware('auth');


Route::get('/dashboardbemagenda', 'DashboardbemagendaController@index')->middleware('auth');
Route::post('/dashbemagenda', 'DashboardbemagendaController@store')->name('dashbemagenda')->middleware('auth');
Route::get('/formbemagenda', 'ty@formbemagenda');
Route::get('/editagenda/{id}', 'DashboardbemagendaController@edit')->middleware('auth');
Route::post('/updateagenda/{id}', 'DashboardbemagendaController@update');
Route::get('/deleteagenda/{id}', 'DashboardbemagendaController@destroy')->name('deleteagenda')->middleware('auth');
Route::get('/acceptagenda/{id}', 'AgendaController@accept')->name('acceptagenda')->middleware('auth');
Route::get('/rejectagenda/{id}', 'AgendaController@reject')->name('rejectagenda')->middleware('auth');



// Admin UKM
Route::get('/adminukm', 'ty@adminukm')->middleware('auth');

Route::get('/dashboardukm', 'DashboardukmController@index')->middleware('auth')->name('dashboardukm');
Route::post('/dashukm', 'DashboardukmController@store')->name('dashukm')->middleware('auth');

Route::get('/dashboardukmregistrasi', 'DashboardukmregistrasiController@index')->middleware('auth');
Route::post('/dashukmregis', 'DashboardukmregistrasiController@store')->name('dashukmregis')->middleware('auth');

Route::get('/dashboardukmanggota', 'DashboardukmanggotaController@index')->middleware('auth');
Route::post('/dashukmanggota', 'DashboardukmanggotaController@store')->name('dashukmanggota')->middleware('auth');
Route::get('/formukmanggota', 'ty@formukmanggota');
Route::get('/editanggotaukm/{id}', 'DashboardukmanggotaController@edit')->middleware('auth');
Route::post('/dashukmanggotaupd/{id}', 'DashboardukmanggotaController@update')->middleware('auth');
Route::get('/dashukmanggotadel/{id}', 'DashboardukmanggotaController@destroy')->name('dashukmanggotadel')->middleware('auth');


Route::get('/dashboardukmgaleri', 'DashboardukmgaleriController@index')->middleware('auth');
Route::post('/dashukmgalerii', 'DashboardukmgaleriController@store')->name('dashukmgalerii')->middleware('auth');
Route::get('/formukmgaleri', 'ty@formukmgaleri');
Route::get('/editgaleriukm/{id}', 'DashboardukmgaleriController@edit')->middleware('auth');
Route::post('/dashukmgaleriupd/{id}', 'DashboardukmgaleriController@update')->middleware('auth');
Route::get('/dashukmgaleridel/{id}', 'DashboardukmgaleriController@destroy')->name('dashukmgaleridel')->middleware('auth');


Route::get('/dashboardukmberita', 'DashboardukmberitaController@index')->middleware('auth');
Route::post('/dashukmberita', 'DashboardukmberitaController@store')->name('dashukmberita')->middleware('auth');
Route::get('/formukmberita', 'ty@formukmberita');
Route::get('/editberitaukm/{id}', 'DashboardukmberitaController@edit')->middleware('auth');
Route::post('/dashukmberitaupd/{id}', 'DashboardukmberitaController@update')->name('dashukmberitaupd')->middleware('auth');
Route::get('/dashukmberitadel/{id}', 'DashboardukmberitaController@destroy')->name('dashukmberitadel')->middleware('auth');

Route::get('/dashboardukmagenda', 'DashboardukmagendaController@index')->middleware('auth');
Route::post('/dashukmagenda', 'DashboardukmagendaController@store')->name('dashukmagenda')->middleware('auth');
Route::get('/formukmagenda', 'ty@formukmagenda');
Route::get('/editagendaukm/{id}', 'DashboardukmagendaController@edit')->middleware('auth');
Route::post('/dashukmagendaupd/{id}', 'DashboardukmagendaController@update')->middleware('auth');
Route::get('/dashukmagendadel/{id}', 'DashboardukmagendaController@destroy')->name('dashukmagendadel')->middleware('auth');



Route::get('/dashboardukmprestasi', 'DashboardukmprestasiController@index')->middleware('auth');
Route::post('/dashukmprestasi', 'DashboardukmprestasiController@store')->name('dashukmprestasi')->middleware('auth');
Route::get('/formukmprestasi', 'ty@formukmprestasi');
Route::get('/editprestasiukm/{id}', 'DashboardukmprestasiController@edit')->middleware('auth');
Route::post('/dashukmprestasiupd/{id}', 'DashboardukmprestasiController@update')->middleware('auth');
Route::get('/dashukmprestasidel/{id}', 'DashboardukmprestasiController@destroy')->name('dashukmprestasidel')->middleware('auth');


Route::get('/dashboardukmjadwal', 'DashboardukmjadwalController@index')->middleware('auth');
Route::post('/dashukmjadwal', 'DashboardukmjadwalController@store')->name('dashukmjadwal')->middleware('auth');
Route::get('/formukmjadwal', 'ty@formukmjadwal');
Route::get('/editjadwalukm/{id}', 'DashboardukmjadwalController@edit')->middleware('auth');
Route::post('/dashukmjadwalupd/{id}', 'DashboardukmjadwalController@update')->middleware('auth');


Route::get('/acceptregistrasi/{id}', 'RegistrasiController@accept')->name('acceptregistrasi')->middleware('auth');
Route::get('/rejectregistrasi/{id}', 'RegistrasiController@reject')->name('rejectregistrasi')->middleware('auth');

// Route::get('/dashboardukm', 'ty@dashboardukm');
Route::get('/anggotaukm', 'ty@anggotaukm');
Route::get('/galeriukm', 'ty@galeriukm');
Route::get('/beritaukm', 'ty@beritaukm');
Route::get('/agendaukm', 'ty@agendaukm');
Route::get('/prestasiukm', 'ty@prestasiukm');
Route::get('/jadwalukm', 'ty@jadwalukm');


// Route::get('/notifikasi', 'NotifikasiController@index');

// Admin BEM
Route::get('/adminbem', 'ty@adminbem');
// Route::get('/dashboardbem', 'ty@dashboardbem');
// Route::get('/dashboardbemukm', 'ty@dashboardbemukm');
// Route::get('/bemberita', 'ty@bemberita');
// Route::get('/bemagenda', 'ty@bemagenda');


// Admin UKM
Route::get('/adminukm', 'ty@adminukm');
// Route::get('/dashboardukm', 'ty@dashboardukm');
Route::get('/anggotaukm', 'ty@anggotaukm');
Route::get('/galeriukm', 'ty@galeriukm');
Route::get('/beritaukm', 'ty@beritaukm');
Route::get('/agendaukm', 'ty@agendaukm');
Route::get('/prestasiukm', 'ty@prestasiukm');
Route::get('/jadwalukm', 'ty@jadwalukm');



Route::get('/notifikasidetail', 'ty@notifikasidetail');


// Route::get('/dashboardukm', 'ty@dashboardukm');
Route::get('/dashboardanggotaukm', 'ty@dashboardanggotaukm');


Route::get('/dashboardberita', 'ty@dashboardberita');
Route::get('/dashboardagenda', 'ty@dashboardagenda');
Route::get('/dashboardprestasi', 'ty@dashboardprestasi');
Route::get('/dashboardjadwal', 'ty@dashboardjadwal');


Route::get('/charts', 'ty@charts');

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


