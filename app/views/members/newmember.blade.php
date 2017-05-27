@extends('layouts.memberslayout')

@section('title')
Members
@stop

@section('content')


<h1>Create Member</h1>


<div class="loginform">
  <form class="well col-md-4 col-md-offset-4" method="POST" action="">
    
    <div class="form-group">
      <label for="memberid"></label>
      <input type="hidden" class="form-control" id="memberid" name="memberid">
    </div>
    
    <div class="form-group">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="mfirstname" name="mfirstname" placeholder="First Name">
    </div>
    
    <div class="form-group">
      <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="mlastname" name="mlastname" placeholder="Last Name">
    </div>
    
    <div class="form-group">
      <label for="street">Street Name</label>
      <input type="text" class="form-control" id="street_address" name="street_address" placeholder="Street Name">
    </div>
    
    <div class="form-group">
      <label for="postcode">Post Code</label>
      <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Post Code">
    </div>
    
    <div class="form-group">
      <label for="suburb">Suburb</label>
      <input type="text" class="form-control" id="suburb" name="suburb" placeholder="Suburb">
    </div>
    
    <div class="form-group">
      <label for="phone">Suburb</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number">
    </div>
    
    <a href="{{ action('MemberController@create') }}">
      <button type="submit" class="btn btn- primary">Submit</button>
    </a>
  </form>
</div>


