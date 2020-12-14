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
    return view('diag.home');
});

Route::get('/master', function () {
    return view('template.master');
});

Route::get('/cases', 'CaseController@index');
Route::get('/device', 'DiagnosesController@index')->middleware('auth');
Route::post('/device', 'DiagnosesController@deviceUser');
Route::get('/start/{device_id}', 'DiagnosesController@start');
Route::get('/question/{device_id}', 'DiagnosesController@question');
Route::post('/result/{device_id}', 'DiagnosesController@result');

Route::get('/hasil', 'DiagnosesController@allResult')->middleware('auth');

Route::get('/logins', function () {
    return view('diag.login');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
