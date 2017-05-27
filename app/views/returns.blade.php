@extends('layouts.master')

@section('title')
  Returns
@stop



<style>
    .actorSearch {
        margin-top: 20%;
    }
</style>

<h1>Returns</h1>

<form class="actorSearch col-md-4 col-md-offset-4" method="POST">
    
    <div class="form-group">
      <label for="text">Select Date</label>
      <input type="text" class="form-control" id="date" name="date" placeholder="yyyy-mm-dd">
    </div>
    
    <a href="searchDate">
      <button type="submit" class="btn btn-primary">Submit</button>
    </a>
</form>
