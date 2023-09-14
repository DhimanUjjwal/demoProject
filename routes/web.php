<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/admin', 'AdminHomeController@index')->name('admin.home.index');
    Route::get('/get-user-details', 'UserDetailController@getUserDetails')->name('get-user-details');
    Route::get('/peopleDetail', 'UserDetailController@index')->name('user-Detail-ListView');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['guest:admin']], function() {
        // /**
        //  * Register Routes
        //  */
        // Route::get('/admin/register', 'AdminRegisterController@show')->name('register.show');
        // Route::post('/admin/register', 'AdminRegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/admin/login', 'AdminLoginController@show')->name('admin.login.show');
        Route::post('/admin/login', 'AdminLoginController@login')->name('admin.login.perform');

    });

    Route::group(['middleware' => ['auth:admin']], function() {
        /**
         * Logout Routes
         */
        Route::get('admin/logout', 'LogoutController@perform')->name('admin.logout.perform');
        Route::get('/admin/update-status', 'AdminUserTransformationController@updateStatus')->name('admin.updateStatus');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
        Route::get('/user-details', 'UserDetailController@showForm')->name('user-details.form');
        Route::post('/user-details', 'UserDetailController@store')->name('user-details.store');
        Route::get('/dashboard/about', 'DashboardController@about')->name('/dashboard.about');
        Route::get('/dashboard/deposit', 'DashboardController@deposit')->name('/dashboard.deposit');
        Route::get('/dashboard/orders', 'DashboardController@orders')->name('/dashboard.orders');
        Route::get('/dashboard/profile-setting', 'DashboardController@profileSetting')->name('/dashboard.profile-setting');
    });


});
