@extends('layouts.memberslayout')

@section('title')
Members
@stop

@section('content')


    <style>
        
        .member-results {
            margin-left: 15%;
            margin-right: 15%;
            background-color: #e6e6e6;
        }
        
    </style>
    
    
<h1>Late Fee Results</h1>

<div class="col-md-8 col-md-offset-2">
    <table style="width:100%" class="table">
        <tr>
            <th>Name</th>
            <th>Late Fees ($)</th> 
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->mfirstname }} {{ $result->mlastname }} </td>
            <td>${{ $result->Total_Fees }}</td>
        </tr>
        @endforeach
    </table>
</div>
