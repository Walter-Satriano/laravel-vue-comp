<?php

// Auth::routes();

Route::get('/index', 'PostController@index') -> name('post.index');
Route::get('/show/{id}', 'PostController@show') -> name('post.show');
