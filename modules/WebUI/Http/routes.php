<?php

Route::group(['middleware' => 'web', 'prefix' => 'webui', 'namespace' => 'Modules\WebUI\Http\Controllers'], function()
{
    Route::get('/', 'WebUIController@index');
});
