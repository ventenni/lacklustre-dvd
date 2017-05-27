<?php

class MemberController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		
		$results = DB::select('select * from members');
		
		return View::make('members.members', ['results' => $results]);

	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		// $id = Input::get('memberid');
		$firstname = Input::get('mfirstname');
		$lastname = Input::get('mlastname');
		$street = Input::get('street_address');
		$postcode = Input::get('postcode');
		$suburb = Input::get('suburb');
		$phone = Input::get('phone');
		
		
		$results = DB::insert('insert into members (mfirstname, mlastname, street_address, postcode, suburb, phone)
							   values(?, ?, ?, ?, ?, ?)',  array($firstname, $lastname, $street, $postcode, $suburb, $phone));
	
		return View::make('members.newmember');
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
		$member = DB::select('select * from members where mid = ?', array($id));
		
		return View::make('members.edit')->with('member', $member);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$fname = Input::get('mfirstname');
		$lname = Input::get('mlastname');
		$street = Input::get('street_address');
		$postcode = Input::get('postcode');
		$suburb = Input::get('suburb');
		$phone = Input::get('phone');
		

		DB::update('UPDATE members
					SET mfirstname = ?, mlastname = ?, street_address = ?, postcode = ?, suburb = ?, phone = ?
					WHERE mid = ?', array($fname, $lname, $street, $postcode, $suburb, $phone, $id));
		
		return Redirect::to('members');
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		
		$late = DB::select('select * from late_fees where mid = ?', array($id));
		
		if ($late != null) {
			echo "member has late fees";
			return Redirect::to('members');
		}
		
		$current = DB::select('select * from current_rentals where mid = ?', array($id));
		
		if ($current != null) {
			echo "member is renting";
			return Redirect::to('members');
		}
		
		DB::delete('delete from members where mid = ?', array($id));
		
		return Redirect::back();
		
		
	}
	
	public function getLatePage() {
		return View::make('members.latefees');
	}
	
	public function latefees() {
		
		$id = Input::get('memberID');
		
		$results = DB::select('SELECT M.mfirstname, M.mlastname, SUM(L.fees) as Total_Fees
								FROM members M
								INNER JOIN late_fees L ON M.mid = L.mid
								WHERE L.mid = ?
								GROUP BY L.mid;', array($id));
								

		
		return View::make('members.lateResults',['results'=>$results]);
	}
	
	public function getRentalsPage() {
		return View::make('members.currentrentals');
	}
	
	public function getcurrentrentals() {
		
		$id = Input::get('memberID');
								
		$results = DB::select( 'SELECT title
								FROM rentals
								WHERE serial_number IN
									(SELECT serial_number
									FROM current_rentals
									WHERE ? IN
										(SELECT mid
										FROM current_rentals))
										GROUP BY title
										;', array($id));
						

		return View::make('members.membersMovies',['results'=>$results]);
	}
	
	public function getForm() {
		return View::make('members.newmember');
	}
	
}
