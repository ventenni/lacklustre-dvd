@extends('layouts.actorslayout')

@section('title')
Search Director
@stop

<style>
    .actorSearch {
        margin-top: 20%;
    }
</style>

<h1>Director Search</h1>

<form class="actorSearch col-md-4 col-md-offset-4" method="POST">
    <div class="form-group">
      <label for="phone">Director Search</label>
      <input type="text" class="form-control" id="director" name="director" placeholder="Search for a director">
    </div>
    
    <a href="searchDirector">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>
