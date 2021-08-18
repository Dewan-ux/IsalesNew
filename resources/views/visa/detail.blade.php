@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Visa Type Code</th>
        <th width="30px">:</th>
        <th>{{ $visa->VisaTypeCode }}</th>
    </tr>
    <tr>
        <th width="150px">Visa Type Name</th>
        <th width="30px">:</th>
        <th>{{ $visa->VisaTypeName }}</th>
    </tr>
    <tr>
        <th><a href="/visa" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection