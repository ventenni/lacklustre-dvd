@extends('layouts.actorslayout')

@section('title')
Search Results
@stop


<h1>Search Results</h1>

<div class="col-md-8 col-md-offset-2">
    <table style="width:100%" class="table">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Movie Serial Number</th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->fname }} </td>
            <td>{{ $result->lname }}</td>
            <td>{{ $result->serial_number }}</td>
            @if (Auth::check())
                <td>
                    <a><button class="btn btn-warning">Update</button></a>
                </td>
                <td>
                    {{ Form::open([ 'method'  => 'delete',
                    'action' => array('actor.destroy', $result->fname, $result->lname, $result->serial_number)]) }}
                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                    {{ Form::close() }}
                </td>
                
    
                
            @endif
        </tr>
        @endforeach
    </table>
</div>
