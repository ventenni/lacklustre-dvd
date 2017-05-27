<style>
    .editForm {
        margin-top: 8%;
    }
</style>

@extends('layouts.master')

@section('title')
Edit Member Details
@stop


@section('contents')

<div class="editForm col-md-4 col-md-offset-4">
  {{ Form::model($member, array('method' => 'PUT', 'route' => array('member.update', $member[0]->mid))) }}

        </br>
        {{ Form::label('mfirstname', 'First Name: ') }}</br>
        {{ Form::text('mfirstname', $member[0]->mfirstname, ['class' => 'form-control', 'size' => '30x20']) }}</br>

        {{ Form::label('mlastname', 'Last Name: ') }}</br>
        {{ Form::text('mlastname', $member[0]->mlastname, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('street_address', 'Street Number & Name: ') }}</br>
        {{ Form::text('street_address', $member[0]->street_address, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('postcode', 'Postcode: ') }}</br>
        {{ Form::text('postcode', $member[0]->postcode, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('suburb', 'Suburb: ') }}</br>
        {{ Form::text('suburb', $member[0]->suburb, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::label('phone', 'Phone: ') }}</br>
        {{ Form::text('phone', $member[0]->phone, ['class' => 'form-control', 'size' => '30x20']) }}</br>
        
        {{ Form::submit('Update') }}</br>
    {{ Form::close() }}
