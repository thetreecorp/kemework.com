<?php

use Illuminate\Http\Request;

Route::get('/get-tasks', 'Api\HomeController@index');


Route::get('all-category','Api\HomeController@all_category');
Route::get('slider','Api\HomeController@slider');
Route::get('area_frelancer/{area_id}','Api\HomeController@area_frelancer');
Route::get('letest-task','Api\HomeController@letest_task');
