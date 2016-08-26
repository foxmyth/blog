<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return redirect('cats');
});

// Category: Cats
Route::get('cats', function() {
	$cats = Blog\Cat::all();

	return view('cats.index')->with('cats', $cats);
});

Route::get('cats/create', function() {
	return view('cats.create');
});

Route::post('cats', function() {
	$cat = Blog\Cat::create(Input::all());

	return redirect('cats/'.$cat->id)->withSuccess('Cat has been created.');
});

Route::get('cats/{cat}', function(Blog\Cat $cat) {
	return view('cats.show')->with('cat', $cat);
})->where('id', '[0-9]+');

Route::get('cats/{cat}/edit', function(Blog\Cat $cat) {
	return view('cats.edit')->with('cat', $cat);
});

Route::put('cats/{cat}', function(Blog\Cat $cat) {
	$cat->update(Input::all());

	return redirect('cats/'.$cat->id)->withSuccess('Cat has been updated.');
});

Route::delete('cats/{cat}', function(Blog\Cat $cat) {
	$cat->delete();
	return redirect('cats')->withSuccess('Cat has been deleted.');
});

Route::get('cats/breeds/{name}', function($name) { 
	return 'Breed';
	// $breed = Blog\Breed::with('cats')
	// 			->whereName($name)
	// 			->first();

	// return view('cats.index')
	// 			->with('breed', $breed)
	// 			->with('cats', $cats);				
});

// Category: about
Route::get('about', function() {
	return view('about')->with('number_of_cats', 9000);
});