<?php
Route::middleware(['web', 'auth:web','IsAdmin'])->group(function () {
    Route::get('/admin-dashboard', 'DashboardController@index');
    Route::get('/admin-dashboard/{all}', 'DashboardController@index')->where(['all' => '.*']);

    Route::prefix('api/admin')->name('admin.')->group(function () {

        // ================================ Profile ================================
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/', 'ProfileController@index')->name('index');
            Route::put('/', 'ProfileController@update')->name('update');
            Route::post('/change-password', 'ProfileController@change_password')->name('change-password');
        });
        // ================================ Profile ================================

        // ================================ Users ================================
        Route::prefix('users')->name('users.')->group(function () {
            Route::get('/', 'UserController@index')->name('index');
            Route::get('/block/{id}', 'UserController@block')->name('block');
        });
        // ================================ Users ================================
    });


});


