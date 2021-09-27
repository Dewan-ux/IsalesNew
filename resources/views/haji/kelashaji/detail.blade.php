@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Class Haji Code</th>
        <th width="30px">:</th>
        <th>{{ $kelashaji->ClassCode }}</th>
    </tr>
    <tr>
        <th width="150px">Class Haji Name</th>
        <th width="30px">:</th>
        <th>{{ $kelashaji->ClassName }}</th>
    </tr>
    <tr>
        <th width="150px">Harga</th>
        <th width="30px">:</th>
        <th>{{ $kelashaji->Price }}</th>
    </tr>
    <tr>
        <th><a href="/kelashaji" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection