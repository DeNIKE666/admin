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


Route::prefix('/')->middleware(array('auth'))->namespace('Cabinet')->group(function () {
    Route::get('/', 'CabinetController@index')->name('cabinet');

    Route::prefix('finance')->group(function () {
        Route::get('/pay', 'FinanceController@pay')->name('pay');

        Route::prefix('deposits')->group(function () {
            Route::get('/', 'DepositsController@deposits')->name('deposits');
            Route::get('/create', 'DepositsController@create')->name('deposits.create');
            Route::post('/store', 'DepositsController@store')->name('deposits.store');
        });

        Route::get('/withdraw', 'FinanceController@withdraw')->name('withdraw');
        Route::get('/stats', 'FinanceController@stats')->name('stats');
    });

    Route::prefix('account')->group(function () {
        Route::get('/logout', 'AccountController@logout')->name('user.logout');
        Route::prefix('profile')->group(function () {
            Route::get('/', 'AccountController@profile')->name('user.profile');
            Route::post('/update', 'AccountController@update')->name('user.update.profile');
        });
    });
});

Route::prefix('admin')->namespace('Admin')->middleware(['auth' , 'role:GlAdmin|admin'])->group(function () {

    Route::get('/', 'AdminController@index')->name('admin');

    // Планы

    Route::prefix('plans')->middleware(['permission:plans'])->group(function () {
        Route::get('/', 'PlansController@index')->name('plans');
        Route::get('/create', 'PlansController@create')->name('plans.create');
        Route::post('/store', 'PlansController@store')->name('plans.store');
        Route::get('/edit/{plan}', 'PlansController@edit')->name('plan.edit');
        Route::post('/update/{plan}', 'PlansController@update')->name('plan.update');
        Route::get('/delete/{plan}', 'PlansController@delete')->name('plan.delete');
    });

    // Роли

    Route::prefix('roles')->middleware(['permission:roles'])->group(function () {
        Route::get('/', 'RolesController@index')->name('roles');
        Route::get('/create', 'RolesController@create')->name('role.create');
        Route::post('/store', 'RolesController@store')->name('role.store');
        Route::get('/edit/{role}', 'RolesController@edit')->name('role.edit');
        Route::post('/update/{role}', 'RolesController@update')->name('role.update');
        Route::get('/delete/{role}', 'RolesController@delete')->name('role.delete');
    });

    // Права доступа

    Route::prefix('permission')->middleware(['permission:permissions'])->group(function () {
        Route::get('/', 'PermissionController@index')->name('permissions');
        Route::get('/create', 'PermissionController@create')->name('permission.create');
        Route::post('/store', 'PermissionController@store')->name('permission.store');
        Route::get('/edit/{permission}', 'PermissionController@edit')->name('permission.edit');
        Route::post('/update/{permission}', 'PermissionController@update')->name('permission.update');
        Route::get('/delete/{permission}', 'PermissionController@delete')->name('permission.delete');
    });

    // Управления пользователями

    Route::prefix('users')->middleware(['permission:users'])->group(function () {
        Route::get('/', 'UserController@index')->name('users');
        Route::get('/create', 'UserController@create')->name('user.create');
        Route::post('/store', 'UserController@store')->name('user.store');
        Route::get('/edit/{user}', 'UserController@edit')->name('user.edit');
        Route::post('/update/{user}', 'UserController@update')->name('user.update');
        Route::get('/delete/{user}', 'UserController@delete')->name('user.delete');
    });

});

Route::prefix('ajax')->namespace('Ajax')->group(function () {
    Route::get('permissions', 'Admin\AdminUsersController@roleAndPermission');
});


Auth::routes();
