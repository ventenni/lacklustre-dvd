<?php

class ActorController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('actor.actor');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
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
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($fname, $lname, $serial)
	{
		
		DB::delete('delete from film_actors where fname = ? and lname = ? and serial_number  = ?', array($fname, $lname, $serial));
		
		return Redirect::to('main');
	}
	
	public function actorSearch() {
		
		return View::make('actor.actorpage');
	}


	public function getMovies() {
		
		$id = Input::get('actorName');
		
		$results = DB::select('SELECT R.title, R.genre, R.release_date, R.rating, R.rental_time, R.cost
								FROM rentals R
								WHERE R.serial_number IN (
									SELECT F.serial_number
									FROM film_actors F
									WHERE F.fname LIKE ? OR F.lname LIKE ?);', array($id, $id));
									
		
		return View::make('actor.actorResults', ['results' => $results]);
	}
	
	public function getRentalSearch() {
		
		return View::make('actor.searchRentals');
	}
	
	public function rentalSearchResults() {
		
		$id = Input::get('title');
		
		
		$results = DB::select('SELECT F.fname, F.lname, F.serial_number
								FROM film_actors F
								WHERE F.serial_number IN
									(SELECT R.serial_number
									FROM rentals R
									WHERE R.title LIKE "%' .$id. '%")
								GROUP BY F.fname, F.lname;');
								
								
		return View::make('actor.searchRentalsResults', ['results' => $results]);
	}
	
	public function getDirectorSearch() {
		return View::make('actor.searchDirector');
	}
	
	public function directorSearchResults() {
		$id = Input::get('director');
		
		
		$results = DB::select('SELECT R.title
								FROM rentals R
								WHERE R.serial_number IN  
									(SELECT serial_number
									FROM movie
									WHERE director LIKE "%' .$id. '%");');
									
		return View::make('actor.searchDirectorResults', ['results' => $results]);
	}
}
