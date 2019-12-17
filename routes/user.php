<?php
Route::middleware(['web'])->group(function () {
    Route::get('/user-dashboard', 'DashboardController@index');
    Route::get('/user-dashboard/{all}', 'DashboardController@index')->where(['all' => '.*']);

    Route::prefix('api/user')->name('user.')->group(function () {

        // ================================ Profile ================================
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/', 'ProfileController@index')->name('index');
            Route::put('/', 'ProfileController@update')->name('update');
        });
        // ================================ Profile ================================

    });


});


