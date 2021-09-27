@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Kode Kelas Umroh</th>
        <th width="30px">:</th>
        <th>{{ $kelasumroh->PackageClassCode }}</th>
    </tr>
    <tr>
        <th width="150px">Nama Kelas Umroh</th>
        <th width="30px">:</th>
        <th>{{ $kelasumroh->PackageClassName }}</th>
    </tr>
    <tr>
        <th width="150px">Harga</th>
        <th width="30px">:</th>
        <th>{{ $kelasumroh->Price }}</th>
    </tr>
    <tr>
        <th><a href="/kelasumroh" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection