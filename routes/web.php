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

Route::get('/', function () { return view('welcome'); });

Auth::routes();

Route::group(['middleware' => ['permission:admin', 'auth']], function () {

    Route::get('/admin/users', 'PagesController@users')->name('admin-users');
    Route::get('/home', 'PagesController@dashboard')->name('home');
    Route::post('/subscribe', 'PaymentsController@subscribe')->name('subscription');

});


// Route::get('/admin/permissions', function() {
//     return view('permissions');
// })->name('admin-permissions')->middleware('auth');

// Route::get('/admin/roles', function() {
//     return view('roles');
// })->name('admin-roles')->middleware('auth');


