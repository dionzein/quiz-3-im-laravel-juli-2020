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
    return view('erd');
});

Route::resource('proyek', 'ProjectsController'); //resource akan otomatis mengenerate
Route::get('users/{id}/daftarkan-staff', 'ProjectsController');
Route::post('users/{id}/daftarkan-staff', 'ProjectsController'); 