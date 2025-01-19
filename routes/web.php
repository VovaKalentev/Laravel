<?php
	Route::get('/', function () {
		return view('hello');
	});



	// Route::prefix('admin')->group(function () {
    //     Route::get('/users', function () {
    //         return 'all';
    //     });
    //     Route::get('/user/{id}', function ($id) {
    //         return $id;
    //     });
	// });
    use App\Http\Controllers\newContr;
	// Route::get('/post', [newContr::class, 'show']);
    // Route::get('/user/{name}', [newContr::class, 'names']);
    Route::get('/post', [newContr::class, 'show']);
?>