@extends('layouts.master')

@section('title')
Date Rented
@stop




<style>
    .actorSearch {
        margin-top: 20%;
    }
</style>

<h1>Rented Titles</h1>

<form class="actorSearch col-md-4 col-md-offset-4" method="POST">
    
    <div class="form-group">
      <label for="text">Serial Number</label>
      <input type="number" min="1" class="form-control" id="serial" name="serial" placeholder="Enter Serial Number">
    </div>
    
    <a href="rentedDate">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>
