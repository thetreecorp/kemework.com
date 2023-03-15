<?php
use App\Http\Middleware\VerifyAPIAccess;
Route::get('/get-tasks', 'Api\HomeController@index');


Route::get('all-category','Api\HomeController@all_category');
Route::get('slider','Api\HomeController@slider');
Route::get('area_frelancer/{area_id}','Api\HomeController@area_frelancer');
Route::get('letest-task','Api\HomeController@letest_task');

Route::group(['namespace' => '\App\Http\Controllers\Api', 'middleware' => [VerifyAPIAccess::class]], function () {
    Route::controller(TaskController::class)->group(function () {
        Route::get('/test', 'index')->name('dashboard');
    });
});    