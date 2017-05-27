<?php

class RentedController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('rented');
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
	public function destroy($id)
	{
		//
	}
	
	public function getTitles() {
		
		$id = Input::get('date');
		
		$results = DB::select('SELECT title
								FROM rentals
								WHERE serial_number IN
									(SELECT serial_number
									FROM current_rentals
									WHERE date_rented = ?);', array($id));
									
		return View::make('rentedResults', ['results' => $results]);
	}

	public function getSerialSearch() {
		return View::make('serialSearch');
	}
	
	public function getSerialTitles() {
		$id = Input::get('serial');
		
		$results = DB::select('SELECT M.mfirstname, M.mlastname
								FROM members M
								WHERE M.mid IN
									(SELECT C.mid
									FROM current_rentals C
									WHERE C.serial_number = ?);', array($id));
									
		return View::make('serialSearchResults', ['results' => $results]);
	}

}
