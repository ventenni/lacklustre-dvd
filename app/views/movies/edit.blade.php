<style>
    .editForm {
        margin-top: 8%;
    }
</style>

@extends('layouts.master')

@section('title')
Edit Movie
@stop


@section('contents')

<div class="editForm col-md-4 col-md-offset-4">
  {{ Form::model($rentals, array('method' => 'PUT', 'route' => array('movie.update', $rentals[0]->serial_number))) }}

        </br>
        {{ Form::label('title', 'Title: ') }}</br>
        {{ Form::text('title', $rentals[0]->title, ['class' => 'form-control', 'size' => '30x20']) }}</br>

        {{ Form::label('genre', 'Genre: ') }}</br>
        {{ Form::text('genre', $rentals[0]->genre, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('release_date', 'Release Date: ') }}</br>
        {{ Form::text('release_date', $rentals[0]->release_date, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('rating', 'Rating: ') }}</br>
        {{ Form::text('rating', $rentals[0]->rating, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('rental_time', 'Rental Time: ') }}</br>
        {{ Form::text('rental_time', $rentals[0]->rental_time, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('cost', 'Cost: ') }}</br>
        {{ Form::text('cost', $rentals[0]->cost, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('copies', 'Copies: ') }}</br>
        {{ Form::text('copies', $rentals[0]->copies, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::submit('Update') }}</br>
    {{ Form::close() }}
