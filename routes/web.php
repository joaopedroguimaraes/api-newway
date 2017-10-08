<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('api');
});

Route::group(array('prefix' => 'api'), function() {
	Route::get('/', function () {
		return response()->json(['message' => 'CRUD API', 'status' => 'Connected']);;
	});

	Route::resource('books', 'BooksController');
	Route::resource('tags', 'TagsController');
});


/*
/jobs               // Returns all jobs
/jobs/add           // Render a form to add a new job
/job/123            // Return the job with ID 123
/companies/123      // Returns the company with ID 123
/companies/123/edit  // Render a form to edit the company with ID 123
*/