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

    Route::get('patients', ['as' => 'patients.index', 'uses' => 'PatientsController@index']);
    Route::get('patients/create', ['as' => 'patients.create', 'uses' => 'PatientsController@create']);
    Route::get('patients/edit/{id}', ['as' => 'patients.edit', 'uses' => 'PatientsController@edit']);
    Route::post('patients/update/{id}', ['as' => 'patients.update', 'uses' => 'PatientsController@update']);
    Route::post('patients/store', ['as' => 'patients.store', 'uses' => 'PatientsController@store']);
    Route::get('patients/destroy/{id}', ['as' => 'patients.destroy', 'uses' => 'PatientsController@destroy']);
    Route::post('patients', ['as' => 'patients.filter', 'uses' => 'PatientsController@filter']);


    Route::get('reports', ['as' => 'reports.index', 'uses' => 'ReportsController@index']);
    Route::get('reports/create', ['as' => 'reports.create', 'uses' => 'ReportsController@create']);
    Route::post('reports/store', ['as' => 'reports.store', 'uses' => 'ReportsController@store']);
    Route::get('reports/show/{id}', ['as' => 'reports.show', 'uses' => 'ReportsController@show']);
    Route::get('reports/export/{id}', ['as' => 'reports.export', 'uses' => 'ReportsController@export']);
    Route::get('reports/mail/{id}', ['as' => 'reports.mail', 'uses' => 'ReportsController@mail']);
    Route::get('reports/destroy/{id}', ['as' => 'reports.destroy', 'uses' => 'ReportsController@destroy']);


    Route::get('type_tests', ['as' => 'type_tests.index', 'uses' => 'TypeTestsController@index']);
    Route::get('type_tests/create', ['as' => 'type_tests.create', 'uses' => 'TypeTestsController@create']);
    Route::get('type_tests/edit/{id}', ['as' => 'type_tests.edit', 'uses' => 'TypeTestsController@edit']);
    Route::post('type_tests/update/{id}', ['as' => 'type_tests.update', 'uses' => 'TypeTestsController@update']);
    Route::post('type_tests/store', ['as' => 'type_tests.store', 'uses' => 'TypeTestsController@store']);
    Route::get('type_tests/destroy/{id}', ['as' => 'type_tests.destroy', 'uses' => 'TypeTestsController@destroy']);
    Route::post('type_tests', ['as' => 'type_tests.filter', 'uses' => 'TypeTestsController@filter']);

    Route::get('tests', ['as' => 'tests.index', 'uses' => 'TestsController@index']);
    Route::get('tests/create', ['as' => 'tests.create', 'uses' => 'TestsController@create']);
    Route::get('tests/edit/{id}', ['as' => 'tests.edit', 'uses' => 'TestsController@edit']);
    Route::post('tests/update/{id}', ['as' => 'tests.update', 'uses' => 'TestsController@update']);
    Route::post('tests/store', ['as' => 'tests.store', 'uses' => 'TestsController@store']);
    Route::get('tests/store', ['as' => 'tests.store', 'uses' => 'TestsController@store']);
    Route::get('tests/destroy/{id}', ['as' => 'tests.destroy', 'uses' => 'TestsController@destroy']);
    Route::post('tests', ['as' => 'tests.filter', 'uses' => 'TestsController@filter']);

});

Auth::routes();

