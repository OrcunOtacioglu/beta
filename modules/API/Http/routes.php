<?php

// @TODO IMPLEMENT API MIDDLEWARE
Route::namespace('Modules\API\Http\Controllers')->prefix('api')->group(function ()
{
    // MANAGEMENT RELATED
    Route::resource('/organizer', 'OrganizerController', ['except' => ['create', 'edit']]);
    Route::resource('/account', 'AccountController', ['except' => ['create', 'edit']]);
    Route::resource('/role', 'RoleController', ['except' => ['create', 'edit']]);
    Route::resource('/permission', 'PermissionController', ['except' => 'create', 'edit']);

    // CONTENT RELATED
    Route::resource('/category', 'CategoryController', ['except' => ['create', 'edit']]);
    Route::resource('/event', 'EventController', ['except' => ['create', 'edit']]);
    Route::resource('/page', 'PageController', ['except' => ['create', 'edit']]);

    // MEDIA FILES
    Route::resource('/image', 'ImageController', ['except' => ['create', 'edit']]);

    // EVENT RELATED
    Route::resource('/attendee', 'AttendeeController', ['except' => ['create', 'edit']]);

    // COMMERCE RELATED
    Route::resource('/order', 'OrderController', ['except' => ['create', 'edit']]);
    Route::resource('/order-items', 'OrderItemController', ['except' => ['create', 'edit']]);

});
