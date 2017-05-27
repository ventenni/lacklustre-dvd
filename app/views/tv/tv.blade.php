@extends('layouts.master')

@section('title')
TV Shows
@stop

@section('content')

<h1>TV Shows</h1>

<style>
    .new-movie {
        margin-left: 10%;
    }
</style>


@if (Auth::check())
		<a href="newtv" class="new_movie">
			<button class="btn btn-success">Add New Tv Show</button>
		</a>
@endif

<div class="row">
    <div class="col-md-8 col-md-offset-1">
        <table style="width:100%" class="table">
            <tr>
                <th>Title</th>
                <th>Genre</th> 
                <th>Release Date</th>
                <th>Rating</th>
                <th>Rental Time (Days)</th>
                <th>Cost ($)</th>
                <th>Copies</th>
                <th>Season</th>
                <th>Discs</th>
                <th>Episode Runtime</th>
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
                <td>{{ $result->season }} </td>
                <td>{{ $result->discs }}</td>
                <td>{{ $result->ep_runtime }} </td>
                @if (Auth::check())
                    <td><a href="{{ URL::route('tv.edit', array($result->serial_number)) }}">
                        <button class="btn btn-warning">Edit</button>
                    </a></td>
                    
                    <td>{{ Form::open([ 'method'  => 'delete',
                    'action' => array('tv.destroy', $result->serial_number, $result->season )]) }}
                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                    {{ Form::close() }}
                    </td>
                @endif
            </tr>
            @endforeach
        </table>
    </div>
</div>
