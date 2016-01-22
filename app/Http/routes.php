<?php

 

Route::group(['middleware' => 'web'], function () {
    Route::auth();
	Route::get('/','HomeController@welcome')->name('welcome_path'); 
	Route::get('/home','HomeController@home')->name('home_path');

	Route::get('/test','HomeController@test')->name('test_path');
	Route::get('/blog/{slug}','HomeController@post')->name('post_path');

	Route::get('/admin','AdminController@dashboard')->name('admin_dashboard_path');
	Route::get('/admin/users','AdminController@users')->name('admin_users_path');
	Route::get('/admin/blog','AdminController@blog')->name('admin_blog_path');
});
