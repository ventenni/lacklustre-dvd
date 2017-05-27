<style>
    .new-movie {
        margin-left: 10%;
    }
</style>

@extends('layouts.master')

@section('title')
Movies
@stop

@section('content')

<h1>Movies</h1>


@if (Auth::check())
		<a href="newmovie" class="new_movie">
			<button class="btn btn-success">Add New Movie</button>
		</a>
@endif

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table style="width:100%" class="table">
            <tr>
                <th>Title</th>
                <th>Genre</th> 
                <th>Release Date</th>
                <th>Rating</th>
                <th>Rental Time (Days)</th>
                <th>Cost ($)</th>
                <th>Copies</th>
                <th>Director</th>
                <th>Runtime</th>
            </tr>
            @foreach ($results as $result)
            <tr>
                <td>{{ $result->title }} </td>
                <td>{{ $result->genre }} </td>
                <td>{{ $result->release_date }} </td>
                <td>{{ $result->rating }} </td>
                <td>{{ $result->rental_time }} </td>
                <td>{{ $result->cost }} </td>
                <td>{{ $result->copies }} </td>
                <td>{{ $result->director }} </td>
                <td>{{ $result->runtime }} </td>
                @if (Auth::check())
                    <td><a href="{{ URL::route('movie.edit', array($result->serial_number)) }}" class="pull-right">
                        <button class="btn btn-warning">Edit</button>
                    </a></td>
                    
                    <td>{{ Form::open([ 'method'  => 'delete',
                    'action' => array('movie.destroy', $result->serial_number)]) }}
                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                    {{ Form::close() }}
                    </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>
