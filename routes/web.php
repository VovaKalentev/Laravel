<?php
	Route::get('/', function () {
		return view('hello');
	});



	Route::prefix('admin')->group(function () {
        Route::get('/users', function () {
            return 'all';
        });
        Route::get('/user/{id}', function ($id) {
            return $id;
        });
	});



?>