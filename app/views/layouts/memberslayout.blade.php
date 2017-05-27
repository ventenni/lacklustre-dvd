@extends('layouts.master')


<style>
    
	.members-stuff {
	    margin-top: 15%;
        position: relative;
        right: 0;
        left: 0;
        z-index: 1029;
	    top: 0;
		}
		
</style>


@if (Auth::check())
<div class="container">
		<div class="navbar col-md-7 col-md-offset-3 text-center">
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav ">
			        <li><a href="members">All Members</a></li>
			        <li><a href="latefees">Late Fees</a></li>
			        <li><a href="{{ action('MemberController@getRentalsPage') }}">Current Rentals</a></li>
			        <li><a href="newmember">Create Member</a></li>
			      </ul>
			      
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div> <!--.navbar fixed top-->
</div>

@endif
@section('content')