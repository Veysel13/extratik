<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('patients');
});

Route::get('/patients', 'Frontend\PatientController@index')->name('patients');
Route::get('/patients/{id}', 'Frontend\PatientController@detail')->name('patients.view');
Route::get('/patients/{id}/sections', 'Frontend\PatientController@sections')->name('sections');
