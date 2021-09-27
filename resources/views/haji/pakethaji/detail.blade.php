@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Package Haji Code</th>
        <th width="30px">:</th>
        <th>{{ $pakethaji->PackageHajiCode }}</th>
    </tr>
    <tr>
        <th width="150px">Travel Name</th>
        <th width="30px">:</th>
        <th>{{ $pakethaji->Penyelenggara }}</th>
    </tr>
    <tr>
        <th width="150px">Package Name</th>
        <th width="30px">:</th>
        <th>{{ $pakethaji->PackageHajiName }}</th>
    </tr>
    <tr>
        <th width="150px">Description</th>
        <th width="30px">:</th>
        <th>{{ $pakethaji->PackageHajiDesc }}</th>
    </tr>
    <tr>
        <th width="150px">Price</th>
        <th width="30px">:</th>
        <th>{{ $pakethaji->Price }}</th>
    </tr>
    <tr>
        <th width="150px">Available Seets</th>
        <th width="30px">:</th>
        <th>{{ $pakethaji->HajiAvailSeets }}</th>
    </tr>
    <tr>
        <th width="150px">Image</th>
        <th width="30px">:</th>
        <th><img src="{{ url('image_haji/'.$pakethaji->PackageHajiImage) }}" width="400px"></th>
    </tr>
    <tr>
        <th><a href="/pakethaji" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection