@extends('layouts.master')

@section('title')
New Tv Show
@stop

@section('content')

<h1>New Tv Show</h1>

<form class="col-md-4 col-md-offset-4" method="POST">
    
    <div class="form-group">
      <label for="text">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Title">
    </div>
    
    <div class="form-group">
      <label for="text">Genre</label>
      <input type="text" class="form-control" id="genre" name="genre" placeholder="Genre">
    </div>
    
    <div class="form-group">
      <label for="text">Release Date</label>
      <input type="text" class="form-control" id="release" name="release" placeholder="yyyy-mm-dd">
    </div>
    
    <div class="form-group">
      <label for="text">Rating</label>
      <input type="text" class="form-control" id="rating" name="rating" placeholder="Rating">
    </div>
    
    <div class="form-group">
      <label for="text">Rental Time</label>
      <input type="text" class="form-control" id="time" name="time" placeholder="Rental Time">
    </div>
    
    <div class="form-group">
      <label for="text">Cost ($)</label>
      <input type="text" class="form-control" id="cost" name="cost" placeholder="Cost">
    </div>
    
    <div class="form-group">
      <label for="int">Copies</label>
      <input type="number" class="form-control" id="copies" name="copies" placeholder="Copies">
    </div>
    
    <div class="form-group">
      <label for="text">Season</label>
      <input type="text" class="form-control" id="season" name="season" placeholder="Season">
    </div>
    
    <div class="form-group">
      <label for="text">Discs</label>
      <input type="text" class="form-control" id="discs" name="discs" placeholder="Discs">
    </div>
    
    <div class="form-group">
      <label for="text">Episode Runtime</label>
      <input type="text" class="form-control" id="runtime" name="runtime" placeholder="Eg 1h 22min">
    </div>
    
    <a href="addTv">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>
