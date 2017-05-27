@extends('layouts.memberslayout')

@section('title')
Members
@stop

@section('content')

        

<style>
    .actorSearch {
        margin-top: 20%;
    }
</style>



<h1>Late Fee Search</h1>



<form class="actorSearch col-md-4 col-md-offset-4" method="POST">
    <div class="form-group">
      <label for="phone">Member Search</label>
      <input type="text" class="form-control" id="memberID" name="memberID" placeholder="Search for a members ID Number">
    </div>
    
    <a href="{{ action('MemberController@latefees') }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>
