<?php
Route::middleware(['web', 'auth:web','IsUser'])->group(function () {
    Route::get('/user-dashboard', 'DashboardController@index');
    Route::get('/user-dashboard/{all}', 'DashboardController@index')->where(['all' => '.*']);

    Route::prefix('api/user')->name('user.')->group(function () {

       // ================================ Dashboard ================================
        Route::prefix('dashboard')->name('dashboard.')->group(function () {
            Route::get('/requirements', 'DashboardController@requirements')->name('requirements');
            Route::get('/user-requirements', 'DashboardController@user_requirements')->name('user-requirements');
            Route::put('/user-set-phone', 'DashboardController@user_set_phone')->name('user-set-phone');
            Route::get('/user-info', 'DashboardController@user_info')->name('user-info');
        });
        // ================================ Dashboard ================================

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
            Route::get('/approved/card', 'CardController@approved')->name('approved');
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

        // ================================ Sell Orders ================================
        Route::prefix('sell-orders')->name('sell-orders.')->group(function () {
            Route::get('/', 'SellOrderController@index')->name('index');
            Route::post('/', 'SellOrderController@store')->name('store');
            Route::get('/{id}', 'SellOrderController@getByID')->name('get-by-id');
            Route::put('/{id}', 'SellOrderController@update')->name('update');
            Route::delete('/{id}', 'SellOrderController@destroy')->name('destroy');
            Route::get('/detail/{id}', 'SellOrderController@detail')->name('detail');
        });
        // ================================ Sell Orders ================================

        // ================================ Currencies ================================
        Route::prefix('helper')->name('helper.')->group(function () {
            Route::get('/currencies', 'HelperController@currency')->name('currency');
            Route::get('/calculate-payment-amount/{value}/{currency_id}/{exchange_type}', 'HelperController@calculate_payment_amount')->name('calculate-payment-amount');
            Route::post('/buy-and-sell', 'HelperController@buy_and_sell')->name('buy-and-sell');
        });
        // ================================ Currencies ================================


    });


});


