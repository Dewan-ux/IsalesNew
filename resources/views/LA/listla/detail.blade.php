@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">LA Code</th>
        <th width="30px">:</th>
        <th>{{ $listla->ListLaCode }}</th>
    </tr>
    <tr>
        <th width="150px">Travel Name</th>
        <th width="30px">:</th>
        <th>{{ $listla->LaTravelName }}</th>
    </tr>
    <tr>
        <th width="150px">LA List Name</th>
        <th width="30px">:</th>
        <th>{{ $listla->ListLaName }}</th>
    </tr>
    <tr>
        <th width="150px">Price</th>
        <th width="30px">:</th>
        <th>{{ $listla->ListLaPrice }}</th>
    </tr>
    <tr>
        <th width="150px">LA Itenary</th>
        <th width="30px">:</th>
        <th>{{ $listla->LaItenary }}</th>
    </tr>
    <tr>
        <th width="150px">Available Seets</th>
        <th width="30px">:</th>
        <th>{{ $listla->LaAvailSeets }}</th>
    </tr>
    <tr>
        <th width="100px">Image</th>
        <th width="30px">:</th>
        <th><img src="{{ url('image_la/'.$listla->LaImage) }}" width="400px"></th>
    </tr>
    <tr>
        <th><a href="/listla" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection