<?php
Route::middleware(['web', 'auth:web'])->group(function () {
    Route::get('/user-dashboard', 'DashboardController@index');
    Route::get('/user-dashboard/{all}', 'DashboardController@index')->where(['all' => '.*']);

    Route::prefix('api/user')->name('user.')->group(function () {

        // ================================ Profile ================================
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/', 'ProfileController@index')->name('index');
            Route::put('/', 'ProfileController@update')->name('update');
        });
        // ================================ Profile ================================

        // ================================ Documents ================================
        Route::prefix('documents')->name('documents.')->group(function () {
            Route::get('/', 'DocumentController@index')->name('index');
            Route::post('/', 'DocumentController@store')->name('store');
            Route::get('/{id}', 'DocumentController@getByID')->name('get-by-id');
            Route::put('/{id}', 'DocumentController@update')->name('update');
            Route::delete('/{id}', 'DocumentController@destroy')->name('destroy');
        });
        // ================================ Documents ================================


    });


});


