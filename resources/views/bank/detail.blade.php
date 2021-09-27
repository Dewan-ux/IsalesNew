@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Code Bank</th>
        <th width="30px">:</th>
        <th>{{ $listbank->BankCode }}</th>
    </tr>
    <tr>
        <th width="150px">Name</th>
        <th width="30px">:</th>
        <th>{{ $listbank->BankName }}</th>
    </tr>
    <tr>
        <th width="150px">Logo</th>
        <th width="30px">:</th>
        <th><img src="{{ url('image_listbank/'.$listbank->Logo) }}" width="400px"></th>
    </tr>
    <tr>
        <th><a href="/listbank" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection