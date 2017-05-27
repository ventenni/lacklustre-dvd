<?php

class MoviesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$results = DB::select('select * from rentals, movie where rentals.serial_number = movie.serial_number');
		
		return View::make('movies.movies', ['results' => $results]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('movies.newmovie');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$title = Input::get('title');
		$genre = Input::get('genre');
		$release = Input::get('release');
		$rating = Input::get('rating');
		$rental = Input::get('time');
		$cost = Input::get('cost');
		$copies = Input::get('copies');
		$director = Input::get('director');
		$runtime = Input::get('runtime');
		$fname1 = Input::get('fname1');
		$lname1 = Input::get('lname1');

		
		DB::insert('insert into rentals (title, genre, release_date, rating, rental_time, cost, copies) values(?, ?, ?, ?, ?, ?, ?)',
		array($title, $genre, $release, $rating, $rental, $cost, $copies));
		
		$serial = DB::select('select serial_number from rentals where title = ?', array($title));
		
		$s = $serial[0]->serial_number;
		
		DB::insert('insert into movie values(?, ?, ?)', array($s, $director, $runtime));
		
		DB::insert('insert into film_actors values (?, ?, ?)', array($fname1, $lname1, $s));
		
		return Redirect::to('movies.movies');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{

		$rentals = DB::select('select * from rentals where serial_number = ?', array($id));
		
		return View::make('movies.edit')->with('rentals', $rentals);

	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		$title = Input::get('title');
		$genre = Input::get('genre');
		$release = Input::get('release_date');
		$rating = Input::get('rating');
		$rental_time = Input::get('rental_time');
		$cost = Input::get('cost');
		$copies = Input::get('copies');
		

		DB::update('UPDATE rentals
					SET title = ?, genre = ?, release_date = ?, rating = ?, rental_time = ?, cost = ?, copies = ?
					WHERE serial_number = ?', array($title, $genre, $release, $rating, $rental_time, $cost, $copies, $id));
		
		return Redirect::to('movies');
// 		UPDATE table_name
//		SET column1=value, column2=value2,...
//		WHERE some_column=some_value 
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($serial)
	{
		DB::delete('delete from film_actors where serial_number = ?', array($serial));
		
		DB::delete('delete from movie where serial_number = ?', array($serial));
		
		DB::delete('delete from rentals where serial_number = ?', array($serial));
		
		return Redirect::back();
	}


}
