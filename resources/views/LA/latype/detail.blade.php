@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">LA Type Code</th>
        <th width="30px">:</th>
        <th>{{ $latype->LaTypeCode }}</th>
    </tr>
    <tr>
        <th width="150px">LA Type Name</th>
        <th width="30px">:</th>
        <th>{{ $latype->LaTypeName }}</th>
    </tr>
    <tr>
        <th><a href="/latype" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection