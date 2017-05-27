<style type="text/css">
    .returns {
        position: relative;
        /*font-style: italic;*/
    }
</style>

@extends('layouts.master')

@section('title')
New DVDs
@stop

@section('content')

<h1>New Releases</h1>

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <table style="width:100%" class="table">
            <tr>
                <th>Title</th>
                <th>Genre</th> 
                <th>Release Date</th>
                <th>Rating</th>
            </tr>
            @foreach ($rentals as $rental)
            <tr>
                <td>{{ $rental->title }} </td>
                <td>{{ $rental->genre }} </td>
                <td>{{ $rental->release_date }} </td>
                <td>{{ $rental->rating }} </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

    