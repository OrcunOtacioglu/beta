<?php

Route::namespace('Modules\API\Http\Controllers')->prefix('api')->group(function () {
    Route::resource('/organizer', 'OrganizerController', ['except' => ['create', 'edit']]);
    Route::resource('/category', 'CategoryController', ['except' => ['create', 'edit']]);
    Route::resource('/event', 'EventController', ['except' => ['create', 'edit']]);
    Route::resource('/attendee', 'AttendeeController', ['except' => ['create', 'edit']]);
    Route::resource('/order', 'OrderController', ['except' => ['create', 'edit']]);
});
