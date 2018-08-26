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

Route::get('/myprofile', 'Agent\ProfileController@myProfile')->name('myprofile');
Route::get('/myProfile/edit', 'Agent\ProfileController@showEditForm')->name('editProfile');
Route::post('/myprofile/edit', 'Agent\ProfileController@editProfile');
Route::get('/myprofile/changepassword', 'Agent\ProfileController@showChangePasswordForm')->name('changePassword');
Route::post('/myprofile/changepassword', 'Agent\ProfileController@changePassword');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
