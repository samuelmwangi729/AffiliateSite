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
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('refsLevels', 'Refs_levelsController');

Route::resource('refsCategories', 'RefsCategoryController');

Route::resource('refsCats', 'RefsCatController');

Route::get('/refs/{site?}/{user_id?}/{ref_category_id?}','RefsCategoryController@refs')->name('refs.user');
Route::get('/Withdraw','WithdrawController@index');
Route::get('/newUser','NewUserController@index');
Route::get('/Upgrade','UpgradeController@index');
Route::get('/AccountStatus/{id}','UserController@getAccountStatus');
Route::get('/9e59d42533de13285d6ef99427563967a25bfcf7','randomGenController@index')->name('generatelink');
Route::post('/WithdrawAmount','WithdrawRequestController@index');
Route::get('/getCurrentUser','getCurrentUserController@index');
Route::get('/postLink','getAffiliateLinkController@receive');