@extends('layouts.actorslayout')

@section('title')
Search Results
@stop

<h1>Search Results</h1>

<div class="col-md-8 col-md-offset-2">
    <table style="width:100%" class="table">
        <tr>
            <th>Title</th>
            <th>Genre</th> 
            <th>Release Date</th>
            <th>Rating</th>
            <th>Rental Time</th>
            <th>Cost</th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->title }} </td>
            <td>{{ $result->genre }}</td>
            <td>{{ $result->release_date }}</td>
            <td>{{ $result->rating }}</td>
            <td>{{ $result->rental_time }}</td>
            <td>{{ $result->cost }}</td>
        </tr>
        @endforeach
    </table>
</div>
