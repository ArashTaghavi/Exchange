<?php
Route::middleware(['web', 'auth:web','IsUser'])->group(function () {
    Route::get('/user-dashboard', 'DashboardController@index');
    Route::get('/user-dashboard/{all}', 'DashboardController@index')->where(['all' => '.*']);

    Route::prefix('api/user')->name('user.')->group(function () {

        // ================================ Profile ================================
        Route::prefix('profile')->name('profile.')->group(function () {
            Route::get('/', 'ProfileController@index')->name('index');
            Route::put('/', 'ProfileController@update')->name('update');
            Route::post('/change-password', 'ProfileController@change_password')->name('change-password');
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

        // ================================ Cards ================================
        Route::prefix('cards')->name('cards.')->group(function () {
            Route::get('/', 'CardController@index')->name('index');
            Route::post('/', 'CardController@store')->name('store');
            Route::get('/{id}', 'CardController@getByID')->name('get-by-id');
            Route::put('/{id}', 'CardController@update')->name('update');
            Route::delete('/{id}', 'CardController@destroy')->name('destroy');
        });
        // ================================ Cards ================================

        // ================================ Buy Orders ================================
        Route::prefix('buy-orders')->name('buy-orders.')->group(function () {
            Route::get('/', 'BuyOrderController@index')->name('index');
            Route::post('/', 'BuyOrderController@store')->name('store');
            Route::get('/{id}', 'BuyOrderController@getByID')->name('get-by-id');
            Route::put('/{id}', 'BuyOrderController@update')->name('update');
            Route::delete('/{id}', 'BuyOrderController@destroy')->name('destroy');
            Route::get('/detail/{id}', 'BuyOrderController@detail')->name('detail');
        });
        // ================================ Buy Orders ================================

        // ================================ Currencies ================================
        Route::prefix('helper')->name('helper.')->group(function () {
            Route::get('/currencies', 'HelperController@currency')->name('currency');
        });
        // ================================ Currencies ================================


    });


});


