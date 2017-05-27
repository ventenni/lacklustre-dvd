<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title')</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 75px 0 50px 0;
		}
		
		.navbar-fixed-top {
		    position: fixed;
		    right: 0;
		    left: 0;
		    z-index: 1030;
    		top: 0;
		}
		
		ul {
			list-style-type: none;
		}
		
		.user-display {
			margin-top: 3%;
			margin-right: -100%;
			text-align: right;
			position: relative;
		}
		
		    table {
        border-collapse: collapse;
    }
    
    table, th, td {
        border: 1px solid black;
        color: black;
    }
    
    td, th {
        padding: 15%;
        text-align: left;
    }

	</style>
</head>
	<body>
		<div class="navbar navbar-fixed-top">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>
			
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="main">Main</a></li>
			        <li><a href="members">Members</a></li>
			        <li><a href="new">New Releases</a></li>
			        <li><a href="movies">Movies</a></li>
			        <li><a href="tv">TV Shows</a></li>
			        <li><a href="actor">Search Titles</a></li>
			        <li><a href="returns">Returns</a></li>
			        <li><a href="rented">Rented</a></li>
			        <li><a href="serialSearch">Currently Rented</a></li>
			        
			        @if (Auth::check())
			        	<li><a href="renting-form">Rent Transaction</a></li>
			        	
			        	<li>
			        		<div class="user-display">
			        			{{ Auth::user()->username }}<a href="{{ action('LoginController@logout') }}">Logout</a>
							</div>
						</li>
			        @else
			        	<li><a href="login">Staff Login</a></li>
			        @endif
			      </ul>
			      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div> <!--.navbar fixed top-->

		
		
		<div class="container">
			
			@section('content')
			
		</div>
		
    </body>
</html>
