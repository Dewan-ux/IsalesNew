@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Package Code</th>
        <th width="30px">:</th>
        <th>{{ $umroh->PackageCode }}</th>
    </tr>
    <tr>
        <th width="150px">Travel Name</th>
        <th width="30px">:</th>
        <th>{{ $umroh->Penyelenggara }}</th>
    </tr>
    <tr>
        <th width="150px">Package Name</th>
        <th width="30px">:</th>
        <th>{{ $umroh->PackageName }}</th>
    </tr>
    <tr>
        <th width="150px">Description</th>
        <th width="30px">:</th>
        <th>{{ $umroh->PackageDesc }}</th>
    </tr>
    <tr>
        <th width="150px">Price</th>
        <th width="30px">:</th>
        <th>{{ $umroh->PackagePrice }}</th>
    </tr>
    <tr>
        <th width="150px">Available Seets</th>
        <th width="30px">:</th>
        <th>{{ $umroh->PackageAvailSeets }}</th>
    </tr>
    <tr>
        <th width="150px">Image</th>
        <th width="30px">:</th>
        <th><img src="{{ url('image_umroh/'.$umroh->Image) }}" width="400px"></th>
    </tr>
    <tr>
        <th><a href="/umroh" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection