<?php

class NewController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{
		
	    // A simple PHP script demonstrating how to connect to MySQL.
	    // Press the 'Run' button on the top to start the web server,
	    // then click the URL that is emitted to the Output tab of the console.
	
	    $servername = getenv('IP');
	    $username = 'root';
	    $password = "";
	    $database = "lacklustre";
	    $dbport = 3306;
	
	    // Create connection
	    $db = new mysqli($servername, $username, $password, $database, $dbport);
	
	    // Check connection
	    if ($db->connect_error) {
	        die("Connection failed: " . $db->connect_error);
	    } 
	    $conned = "Connected successfully (".$db->host_info.")";
	   
	    $rentals = DB::select("SELECT * FROM rentals WHERE release_date > DATE_SUB(CURDATE(), INTERVAL 6 MONTH);");
	    
		return View::make('new', ['rentals' => $rentals]);
	}

}
