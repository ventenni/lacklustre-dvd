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
      <label for="phone">Actor Search</label>
      <input type="text" class="form-control" id="actorName" name="actorName" placeholder="Search for an actors name">
    </div>
    
    <a href="{{ action('ActorController@getMovies') }}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>
