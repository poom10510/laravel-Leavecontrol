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
    return view('welcome');
});

Route::get('/user', 'Person_controller@index');
Route::get('/insert', 'Person_controller@insert_view');
Route::post('/insertv', 'Person_controller@insert');

Route::get('delete/{id}','Person_controller@destroy');

Route::post('edit/{id}','Person_controller@edit');
Route::get('update/{id}','Person_controller@update_view');


Route::get('/userinfos', 'User_info_Controller@index');
Route::get('/userinfos/insert', 'User_info_Controller@insert_view');
Route::post('/userinfos/inserting', 'User_info_Controller@insert');
Route::get('/userinfos/delete/{id}','User_info_Controller@destroy');
Route::post('/userinfos/edit/{id}','User_info_Controller@edit');
Route::get('/userinfos/update/{id}','User_info_Controller@update_view');

Route::get('/admin','Admincontroller@index');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/insert', 'TaskController@insert_view');
Route::post('/tasks/inserting', 'TaskController@insert');
Route::get('/tasks/delete/{id}','TaskController@destroy');
Route::post('/tasks/edit/{id}','TaskController@edit');
Route::get('/tasks/update/{id}','TaskController@update_view');

Route::get('/leavehistory', 'LeavehistoryController@index');
Route::get('/leavehistory/insert', 'LeavehistoryController@insert_view');
Route::post('/leavehistory/inserting', 'LeavehistoryController@insert');
Route::get('/leavehistory/delete/{id}','LeavehistoryController@destroy');
Route::post('/leavehistory/edit/{id}','LeavehistoryController@edit');
Route::get('/leavehistory/update/{id}','LeavehistoryController@update_view');

Route::get('/userslogin', 'LoginController@index');
Route::get('/userslogin/insert', 'LoginController@insert_view');
Route::post('/userslogin/inserting', 'LoginController@insert');
Route::get('/userslogin/delete/{id}','LoginController@destroy');
Route::post('/userslogin/edit/{id}','LoginController@edit');
Route::get('/userslogin/update/{id}','LoginController@update_view');

Route::get('/roletype', 'RoletypeController@index');
Route::get('/roletype/insert', 'RoletypeController@insert_view');
Route::post('/roletype/inserting', 'RoletypeController@insert');
Route::get('/roletype/delete/{id}','RoletypeController@destroy');
Route::post('/roletype/edit/{id}','RoletypeController@edit');
Route::get('/roletype/update/{id}','RoletypeController@update_view');

Route::get('/leavetype', 'LeavetypeController@index');
Route::get('/leavetype/insert', 'LeavetypeController@insert_view');
Route::post('/leavetype/inserting', 'LeavetypeController@insert');
Route::get('/leavetype/delete/{id}','LeavetypeController@destroy');
Route::post('/leavetype/edit/{id}','LeavetypeController@edit');
Route::get('/leavetype/update/{id}','LeavetypeController@update_view');

Route::get('/userinfos/test', 'User_info_Controller@testlastindex');

Route::get('/register', 'RegisterController@index');
Route::post('/register/inserting', 'RegisterController@insert');