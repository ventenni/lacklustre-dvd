@extends('layouts.memberslayout')

@section('title')
Members
@stop

<style>
    
    .member-results {
        margin-left: 15%;
        margin-right: 15%;
        background-color: #e6e6e6;
    }
    
    
    
</style>

@section('content')

<h1>Members</h1>




<div class="col-md-8 col-md-offset-2">
    <table style="width:100%" class="table">
        <tr>
            <th>Title</th>
        </tr>
        @foreach ($results as $result)
        <tr>
            <td>{{ $result->title }} </td>
        </tr>
        @endforeach
    </table>
</div>