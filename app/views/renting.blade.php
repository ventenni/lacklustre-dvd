@extends('layouts.master')

@section('title')
Renting
@stop

@section('content')


<h1>Renting</h1>


<div class="loginform">
  <form class="well col-md-4 col-md-offset-4" method="POST" action="">
    
    <div class="form-group">
      <label for="memberID">Member ID</label>
      <input type="text" class="form-control" id="mid" name="mid" placeholder="Member ID">
    </div>
    
    <div class="form-group">
      <label for="serial">Rental Serial Number</label>
      <input type="text" class="form-control" id="serial" name="serial" placeholder="Rental Serial Number">
    </div>
    
    <a href="{{ action('UserController@store') }}">
      <button type="submit" class="btn btn- primary">Submit</button>
    </a>
  </form>
</div>


