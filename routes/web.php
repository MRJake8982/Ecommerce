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

Route::get('/','pageController@inicio' )->name('inicio');

Route::get('loggin','pageController@login')->name('loggin');

Route::post('admin/detalle/','pageController@crear')->name('articulo.crear');

Route::get('produto', function () {
    return view('producto');
})->name('producto');

Route::get('register','pageController@registro')->name('registro');

Route::get('admin', 'pageController@admin')->name('admin');
Route::get('admin/detalle/{id}', 'pageController@detalle')->name('articulo.detalle');