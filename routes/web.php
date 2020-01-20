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
Route::get('social-login/{provider}', 'Auth\LoginController@redirectToProvider')->name('social-login-redirect');
Route::get('social-login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('social-login-callback');


Auth::routes();

/**
 * User-authenticated and Admin privileged routes
 */
Route::group(['middleware' => ['permission:admin', 'auth']], function () {

    Route::get('/admin/users', 'PagesController@users')->name('admin-users');
    Route::get('/admin/user/{id}', 'UsersController@editUser')->name('user.edit');
    Route::get('/admin/user/delete/{id}', 'UsersController@deleteUser')->name('user.delete');

    Route::post('/admin/user', 'UsersController@updateUser')->name('user.update');

});

/**
 * User-authenticated routes
 */
Route::group(['middleware' => ['auth']], function () {

    Route::get('/home', 'PagesController@dashboard')->name('home');
    Route::get('/ajax', 'DatatablesController@getUsers')->name('users.datatable');
    Route::post('/subscribe', 'PaymentsController@subscribe')->name('subscription');

});


// Route::get('/admin/permissions', function() {
//     return view('permissions');
// })->name('admin-permissions')->middleware('auth');

// Route::get('/admin/roles', function() {
//     return view('roles');
// })->name('admin-roles')->middleware('auth');


