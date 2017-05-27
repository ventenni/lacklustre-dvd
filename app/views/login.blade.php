<style>
  .loginform {
    margin-top: 25px;
  }
</style>

@extends('layouts.master')

@section('title')
  Staff Login
@stop

@section('content')

<h1>Staff Login</h1>


<div class="loginform">
  <form class="well col-md-4 col-md-offset-4" method="POST" action="">
    <div class="form-group">
      <label for="User">User</label>
      <input type="text" class="form-control" id="userid" name="userid" aria-describedby="emailHelp" placeholder="Staff ID">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="userpassword" name="userpassword" placeholder="Password">
    </div> 
    <a href="{{ action('LoginController@signin') }}">
      <button type="submit" class="btn btn- primary">Submit</button>
    </a>
  </form>
</div>