<?php

Route::group(['middleware' => 'web', 'prefix' => 'dashboard', 'namespace' => 'Modules\Dashboard\Http\Controllers'], function()
{
    Route::get('/', 'DashboardController@index');
    Route::resource('/event', 'EventController');
    Route::resource('/order', 'OrderController');
    Route::resource('/attendee', 'AttendeeController');
    Route::resource('/page', 'PageController');
});
