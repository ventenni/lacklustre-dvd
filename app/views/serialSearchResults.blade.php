@extends('layouts.master')

@section('title')
Search Results
@stop




<h1>Search Results</h1>

<div class="col-md-8 col-md-offset-2">
    <table style="width:100%" class="table">
        <tr>
            <th>Name</th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->mfirstname }} {{ $result->mlastname }} </td>
        </tr>
        @endforeach
    </table>
</div>