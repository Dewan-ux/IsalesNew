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
        <th width="150px">Package Haji Name</th>
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
        <th>{{ $pakethaji->PackageHajiPrice }}</th>
    </tr>
    <tr>
        <th width="150px">Available Seets</th>
        <th width="30px">:</th>
        <th>{{ $pakethaji->HajiAvailSeets }}</th>
    </tr>
    <tr>
        <th><a href="/pakethaji" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection