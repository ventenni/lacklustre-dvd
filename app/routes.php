<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function() 
{
    return View::make('main');
});

Route::get('/main', function() 
{
    return View::make('main');
});



// Member Routes

Route::get('members', 'MemberController@index');

Route::get('latefees', 'MemberController@getLatePage');

Route::post('latefees','MemberController@latefees');

Route::get('currentrentals','MemberController@getRentalsPage');

Route::post('currentrentals', 'MemberController@getcurrentrentals');

Route::get('newmember', 'MemberController@getForm');

Route::post('newmember', 'MemberController@create');

Route::delete('member/{mid}/destroy',['as' => 'member.destroy', 'uses' => 'MemberController@destroy']);

Route::resource('member', 'MemberController');



// Movie Routes

Route::get('movies', 'MoviesController@index');

Route::get('new', 'NewController@index'); // Movies and TV

Route::get('newmovie', 'MoviesController@create');

Route::post('newmovie', 'MoviesController@store');

Route::delete('movie/{serial_number}/destroy',['as' => 'movie.destroy', 'uses' => 'MoviesController@destroy']);

Route::resource('movie', 'MoviesController');



// TV Routes

Route::get('tv', 'TvController@index');

Route::get('newtv', 'TvController@create');

Route::post('newtv', 'TvController@store');

Route::resource('tv', 'TvController');

Route::delete('tv/{serial_number}/{season}/destroy',['as' => 'tv.destroy', 'uses' => 'TvController@destroy']);



// Login Routes

Route::get('login', 'LoginController@index');

Route::post('login', 'LoginController@signin');

Route::get('login', 'LoginController@logout');



// Title Routes

Route::get('actor', 'ActorController@index');

Route::get('actorpage', 'ActorController@actorSearch');

Route::post('actorpage', 'ActorController@getMovies');

Route::get('moviesearch', 'ActorController@getRentalSearch');

Route::post('moviesearch', 'ActorController@rentalSearchResults');

Route::get('searchDirector', 'ActorController@getDirectorSearch');

Route::post('searchDirector', 'ActorController@directorSearchResults');

Route::get('searchRentalsResults', 'ActorController@destroy');

Route::delete('actor/{fname}/{lname}/{serial_number}/destroy',['as' => 'actor.destroy', 'uses' => 'ActorController@destroy']);



// Returns Route

Route::get('returns', 'ReturnsController@index');

Route::post('returns', 'ReturnsController@getTitles');

Route::get('rented', 'RentedController@index');

Route::post('rented', 'RentedController@getTitles');

Route::get('serialSearch', 'RentedController@getSerialSearch');

Route::post('serialSearch', 'RentedController@getSerialTitles');



// User Routes

Route::get('renting-form', 'UserController@index');

Route::post('renting-form', 'UserController@store');

