@extends('layouts.actorslayout')

@section('title')
Search Actors
@stop

<style>
    .actorSearch {
        margin-top: 20%;
    }
</style>

<form class="actorSearch col-md-4 col-md-offset-4" method="POST">
    <div class="form-group">
      <label for="phone">Rental Search</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Search for a movie or tv show">
    </div>
    
    <a href="searchRentals">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>
