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
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/daftar/sd', 'PendaftaranController@sd')->name('list_sd');
Route::get('/daftar/smp', 'PendaftaranController@smp')->name('list_smp');
Route::get('/daftar/sma', 'PendaftaranController@sma')->name('list_sma');
Route::get('/daftar/smk', 'PendaftaranController@smk')->name('list_smk');

Route::get('/mapel', 'Mapel\MapelController@index')->name('mapel');
Route::get('/mapel/user', 'Mapel\MapelController@index1')->name('mapel1');
Route::get('/mapel/create', 'Mapel\MapelController@create')->name('cmapel');

Route::get('/mapel/edit', 'Mapel\MapelController@edit')->name('emapel');
Route::put('/mapel/update', 'Mapel\MapelController@update')->name('umapel');

Route::get('/nilai','NilaiController@index')->name('nilai');
Route::get('/nilai/user','NilaiController@index1')->name('nilai1');
Route::get('/nilai/create','NilaiController@create')->name('cnilai');
Route::put('/nilai/update','NilaiController@update')->name('unilai');

Route::get('/tugas','TugasController@index')->name('tugas');
Route::get('/tugas/user','TugasController@index1')->name('tugas1');
Route::get('/tugas/create','TugasController@create')->name('ctugas');
Route::put('/tugas/update','TugasController@update')->name('utugas');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});



