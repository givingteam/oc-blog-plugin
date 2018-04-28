<?php

Route::prefix('api/givingteam/blog')->middleware('web')->group(function() {
    Route::resource('posts', 'GivingTeam\Blog\Http\Controllers\PostController');
});