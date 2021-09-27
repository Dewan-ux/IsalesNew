@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Hotel List ID</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->HotelListID }}</th>
    </tr>
    <tr>
        <th width="150px">Tipe Kamar</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->HotelRoomTypeName }}</th>
    </tr>
    <tr>
        <th width="150px">Harga</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->PriceRoomType }}</th>
    </tr>
    <tr>
        <th width="150px">Tamu</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->Tamu }}</th>
    </tr>
    <tr>
        <th width="150px">Tipe Ranjang</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->TipeRanjang }}</th>
    </tr>
    <tr>
        <th width="150px">Ukuran Kamar</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->UkuranKamar }}</th>
    </tr>
    <tr>
        <th width="150px">Fasilitas Kamar</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->FasilitasKamar }}</th>
    </tr>
    <tr>
        <th width="150px">Fasilitas Kamar Mandi</th>
        <th width="30px">:</th>
        <th>{{ $hotelroomtype->FasilitasKamarMandi }}</th>
    </tr>
    <tr>
        <th width="100px">Image</th>
        <th width="30px">:</th>
        <th><img src="{{ url('hotelroomtype/'.$hotelroomtype->Image) }}" width="400px"></th>
    </tr>
    <tr>
        <th><a href="/roomtype" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection