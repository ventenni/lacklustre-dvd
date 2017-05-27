@extends('layouts.memberslayout')

@section('title')
Members
@stop

@section('content')

<style>
    
    .member-results {
        margin-left: 15%;
        margin-right: 15%;
    }
    

    
    
</style>

<h1>Members Page</h1>


    <div class="row member-results">
        <div class="col-md-8 col-md-offset-2">
            <table style="width:100%" class="table">
                <tr>
                    <th>Name</th>
                    <th>Address</th> 
                    <th>Phone</th>
                </tr>
                @foreach ($results as $result)
                <tr>
                    <td>{{ $result->mfirstname }} {{ $result->mlastname }} </td>
                    <td>{{ $result->street_address }} {{ $result->postcode }} {{ $result->suburb }}</td>
                    <td>{{ $result->phone }}</td>
                    
                    @if (Auth::check())
                        @if (Auth::user()->username == 'root')
                            <td><a href="{{ URL::route('member.edit', array($result->mid)) }}">
                                <button class="btn btn-warning">Edit</button>
                            </a></td>
                            
                            <td>{{ Form::open([ 'method'  => 'delete',
                            'action' => array('member.destroy', $result->mid )]) }}
                                <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                            {{ Form::close() }}
                            </td>
                        @endif
                    @endif
                </tr>
                @endforeach
            </table>
        </div>
    </div>
