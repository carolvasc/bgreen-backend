<?php

// routes api

Route::prefix('api')->group(function(){
    // users
    Route::get('users', 'UserController@index');
    // investments
    Route::get('investiments', 'InvestmentsController@index');
    Route::get('investments-users', 'InvestmentsUsersController@index'); // passar id via request
    Route::middleware(['cors'])->group(function(){
        Route::post('investments-users-store', 'InvestmentsUsersController@store');
    });
    // rentability
    Route::get('profitability-user', 'ProfitabilityUserController@index'); // passar id via request
});
