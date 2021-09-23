@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Tour Type Code</th>
        <th width="30px">:</th>
        <th>{{ $tourtype->TourTypeCode }}</th>
    </tr>
    <tr>
        <th width="150px">Tour Name</th>
        <th width="30px">:</th>
        <th>{{ $tourtype->TourTypeName }}</th>
    </tr>
    <tr>
        <th><a href="/tour" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection