<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});

//
Route::group(['prefix'=>'admin', 'middleware'=>'auth.checkrole:admin', 'as'=>'admin.'],function() {

    Route::get('patients', ['as' => 'patients.index', 'uses' => 'patientsController@index']);
    Route::get('patients/create', ['as' => 'patients.create', 'uses' => 'patientsController@create']);
    Route::get('patients/edit/{id}', ['as' => 'patients.edit', 'uses' => 'patientsController@edit']);
    Route::post('patients/update/{id}', ['as' => 'patients.update', 'uses' => 'patientsController@update']);
    Route::post('patients/store', ['as' => 'patients.store', 'uses' => 'patientsController@store']);
    Route::get('patients/destroy/{id}', ['as' => 'patients.destroy', 'uses' => 'patientsController@destroy']);
    Route::post('patients', ['as' => 'patients.filter', 'uses' => 'patientsController@filter']);

});

Auth::routes();

Route::get('/home', function() {
    return redirect()->route('admin.patients.index');
});