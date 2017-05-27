
@extends('layouts.memberslayout')

@section('title')
Members
@stop

<style>
    .memberIDsearch {
        margin-top: 20%;
    }
    
</style>

<form class="memberIDsearch col-md-4 col-md-offset-4" method="POST">
    <div class="form-group">
      <label for="phone">Member Search</label>
      <input type="text" class="form-control" id="memberID" name="memberID" placeholder="Search for member ID">
    </div>
    
    <a href="{{ action('MemberController@getcurrentrentals') }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>