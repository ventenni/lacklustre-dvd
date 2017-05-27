<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('renting');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$username = "root";
		$password = Hash::make('password');
		
		DB::delete('delete from users where username = ?', array($username));
		
		DB::insert('insert into users(username, password) values (?, ?)', array($username, $password, $token));
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$memberID = Input::get('mid');
		$serial = Input::get('serial');
		
		$getTime = DB::select('select rental_time from rentals where serial_number = ?', array($serial));
		
		$time = $getTime[0]->rental_time;
		
		DB::insert('insert into current_rentals(mid, serial_number, date_rented, date_due, date_returned) 
		values(?, ?, CURDATE(), DATE_ADD(CURDATE(), INTERVAL ? DAY), NULL)', array($memberID, $serial, $time));
		
		DB::update('update rentals set copies = copies - 1 where serial_number = ?', array($serial));
		
		return Redirect::to('renting-form');
		
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

	public function logout() 
	{
		Auth::logout();
		return Redirect::to('main');
	}

}
