<?php

class TvController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$results = DB::select('select * from rentals, tv_series where rentals.serial_number = tv_series.serial_number');
		
	
		
		return View::make('tv.tv', ['results' => $results]);
	
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('tv.newtv');
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
		$season = Input::get('season');
		$discs = Input::get('discs');
		$runtime = Input::get('runtime');
		

		DB::insert('insert into rentals (title, genre, release_date, rating, rental_time, cost, copies) values(?, ?, ?, ?, ?, ?, ?)',
		array($title, $genre, $release, $rating, $rental, $cost, $copies));
		
		$serial = DB::select('select serial_number from rentals where title = ?', array($title));
		
		$s = $serial[0]->serial_number;
		
		DB::insert('insert into tv_series values(?, ?, ?, ?)', array($s, $season, $discs, $runtime));
		
		return Redirect::to('tv');
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
		
		return View::make('tv.edit')->with('rentals', $rentals);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		
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
		
		return Redirect::to('tv');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($serial, $season)
	{
		
		DB::delete('delete from tv_series where serial_number = ? and season = ?', array($serial, $season));
		
		$tv = DB::select('select * from tv_series where serial_number = ?', array($serial));
		
		if ($tv == null) {
			DB::delete('delete from rentals where serial_number = ?', array($serial));
		}
	
		return Redirect::back();
	}


}
