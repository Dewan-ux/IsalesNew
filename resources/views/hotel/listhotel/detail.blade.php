@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Hotel List Code</th>
        <th width="30px">:</th>
        <th>{{ $hotel->HotelListCode }}</th>
    </tr>
    <tr>
        <th width="150px">Travel Name</th>
        <th width="30px">:</th>
        <th>{{ $hotel->HotelTravelName }}</th>
    </tr>
    <tr>
        <th width="150px">Hotel List Name</th>
        <th width="30px">:</th>
        <th>{{ $hotel->HotelListName }}</th>
    </tr>
    <tr>
        <th width="150px">Hotel List Location</th>
        <th width="30px">:</th>
        <th>{{ $hotel->HotelListLocation }}</th>
    </tr>
    <tr>
        <th width="150px">Description</th>
        <th width="30px">:</th>
        <th>{{ $hotel->HotelDesc }}</th>
    </tr>
    <tr>
        <th width="100px">Hotel List Image</th>
        <th width="30px">:</th>
        <th><img src="{{ url('image_hotel/'.$hotel->HotelListImage) }}" width="400px"></th>
    </tr>
    <tr>
        <th><a href="/hotel" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection