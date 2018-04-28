<?php

Route::prefix('api/givingteam/blog')->middleware('web')->group(function() {
    Route::get('categories', 'GivingTeam\Blog\Http\Controllers\CategoryController@index');
    Route::resource('posts', 'GivingTeam\Blog\Http\Controllers\PostController');
});