@extends('layout.app')
@section('title','Detail Data')


@section('content')

<table class="table">
    <tr>
        <th width="150px">Customer ID</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerId }}</th>
    </tr>
    <tr>
        <th width="150px">Customer First Name</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerFirstName }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Middle Name</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerMiddleName }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Last Name</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerLastName }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Identification</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerIdentification }}</th>
    </tr>
	<tr>
        <th width="150px">Customer ID Type ID</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustIDTypeID }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Street Address</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerStreetAddress }}</th>
    </tr>
	<tr>
        <th width="150px">City Code</th>
        <th width="30px">:</th>
        <th>{{ $customer->CityCode }}</th>
    </tr>
	<tr>
        <th width="150px">Province Code</th>
        <th width="30px">:</th>
        <th>{{ $customer->ProvinceCode }}</th>
    </tr>
	<tr>
        <th width="150px">Country Code</th>
        <th width="30px">:</th>
        <th>{{ $customer->CountryCode }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Postal Code</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerPostalCode }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Phone Number</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerPhoneNumber }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Email</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerEmail }}</th>
    </tr>
	<tr>
        <th width="150px">Customer Type ID</th>
        <th width="30px">:</th>
        <th>{{ $customer->CustomerTypeID }}</th>
    </tr>
	<tr>
        <th width="150px">User ID</th>
        <th width="30px">:</th>
        <th>{{ $customer->UserID }}</th>
    </tr>
    <tr>
        <th><a href="/customer" class="btn btn-success tbn-sm">Back</a></th>
    </tr>
</table>

@endsection