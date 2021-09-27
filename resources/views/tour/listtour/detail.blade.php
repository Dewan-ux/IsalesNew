@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Tour Code</th>
        <th width="30px">:</th>
        <th>{{ $tour->TourPriceCode }}</th>
    </tr>
    <tr>
        <th width="150px">Travel Name</th>
        <th width="30px">:</th>
        <th>{{ $tour->TourTravelName }}</th>
    </tr>
    <tr>
        <th width="150px">Tour Name</th>
        <th width="30px">:</th>
        <th>{{ $tour->TourPriceName }}</th>
    </tr>
    <tr>
        <th width="150px">Tour Price</th>
        <th width="30px">:</th>
        <th>{{ $tour->TourPrice }}</th>
    </tr>
    <tr>
        <th width="150px">Tour Itenary</th>
        <th width="30px">:</th>
        <th>{{ $tour->TourItenary }}</th>
    </tr>
    <tr>
        <th width="150px">Available Seets</th>
        <th width="30px">:</th>
        <th>{{ $tour->TourAvailSeets }}</th>
    </tr>
    <tr>
        <th width="100px">Tour Image</th>
        <th width="30px">:</th>
        <th><img src="{{ url('image_tour/'.$tour->TourImage) }}" width="400px"></th>
    </tr>
    <tr>
        <th><a href="/tour" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection