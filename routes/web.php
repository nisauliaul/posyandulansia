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

// Route::get('/', function () {
    //     return view('welcome');
    // });
    
    Route::get('/', 'HomePageController@homepage')->name('homepage');
    
    Route::get('register', 'Auth\AuthController@register')->name('register');
    Route::post('post-register', 'Auth\AuthController@storeUser')->name('post-register');
    Route::get('login', 'Auth\AuthController@login')->name('login');
    Route::post('login', 'Auth\AuthController@authenticate');
    

    Route::group(['middleware' => ['auth', 'CheckLevelMiddleware:admin']], function () {
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('pasien', 'PasienController@index')->name('pasien');
        Route::get('pasien/tambah', 'PasienController@tambah')->name('pasien.tambah');
        Route::post('pasien', 'PasienController@simpan')->name('pasien.simpan');
        Route::delete('pasien/{id}', 'PasienController@delete')->name('pasien.delete');
        Route::get('pasien/{id}/edit', 'PasienController@edit')->name('pasien.edit');
        Route::patch('pasien/{id}', 'PasienController@update')->name('pasien.update');
        
        Route::get('catatankesehatan', 'CatatanKesehatanController@index')->name('cklansia');  
        Route::get('catatankesehatan/tambah', 'CatatanKesehatanController@tambah')->name('cklansia.tambah');
        Route::post('catatankesehatan/simpan', 'CatatanKesehatanController@simpan')->name('cklansia.simpan');
        Route::delete('catatankesehatan/{id}', 'CatatanKesehatanController@delete')->name('cklansia.delete');
        Route::get('catatankesehatan/{id}/edit', 'CatatanKesehatanController@edit')->name('cklansia.edit');
        Route::patch('catatankesehatan/{id}', 'CatatanKesehatanController@update')->name('cklansia.update');
        Route::get('logout', 'Auth\AuthController@logout')->name('logout');
    });
    
    // Route::group(['middleware' => ['auth', 'CheckLevelMiddleware:lansia']], function () {
    //     Route::get('dashboard', 'DashboardController@index')->name('dashboard'); 
        Route::get('informasi-lansia', 'InformasiLansiaController@index')->name('ilansia');
    // });



    // Auth::routes();
    // Route::post('register', 'Auth\RegisterController@tambah')->name('register');