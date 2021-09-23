@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Flight Code</th>
        <th width="30px">:</th>
        <th>{{ $flight->FlightListID }}</th>
    </tr>
    <tr>
        <th width="150px">Flight Name</th>
        <th width="30px">:</th>
        <th>{{ $flight->FlightListName }}</th>
    </tr>
    <tr>
        <th width="150px">Flight Class Code</th>
        <th width="30px">:</th>
        <th>{{ $flight->FlightListClassID }}</th>
    </tr>
    <tr>
        <th width="150px">Flight Company</th>
        <th width="30px">:</th>
        <th>{{ $flight->FlightListCompany }}</th>
    </tr>
    <tr>
        <th width="150px">Flight Seets</th>
        <th width="30px">:</th>
        <th>{{ $flight->FlightListSeets }}</th>
    </tr>
    
    <tr>
        <th><a href="/flight" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection