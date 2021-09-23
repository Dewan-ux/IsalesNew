@extends('layout.app')
@section('title','Add Data')


@section('content')

<form action="/customer/store" method="POST">
  @csrf

<div class="content">
  <div class="row">
    <div class="col-sm-6">
    
      <div class="form-group">
        <label class="form-label">Customer First Name</label>
        <input name="customerfirstname" class="form-control" value="{{ old('customerfirstname') }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Middle Name</label>
        <input name="customermiddlename" class="form-control" value="{{ old('customermiddlename') }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Last Name</label>
        <input name="customerlastname" class="form-control" value="{{ old('customerlastname') }}">
      </div>
	  
	   <div class="form-group">
        <label class="form-label">Customer Identificarion</label>
        <input name="customeridentification" class="form-control" value="{{ old('customeridentification') }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Id Type Id</label>
        <input name="customeridtypeid" class="form-control" value="{{ old('customeridtypeid') }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Street Address</label>
        <input name="customerstreetaddress" class="form-control" value="{{ old('customerstreetaddress') }}">
      </div>
	  
	 <form action="/customer/add">
	  <div class="form-group">
        <label class="form-label">City Code</label>
		<select class="form-control" name="citycode" id="citycode">
		 @foreach ($city as $data)
			<option value="{{$data->CityCode}}">{{$data->CityName}}</option>
		@endforeach
		</select>
      </div>
	  
	  
	  
	  <div class="form-group">
        <label class="form-label">Province Code</label>
		<select class="form-control" name="provincecode" id="provincecode">
			@foreach ($province as $data)
			<option value="{{$data->ProvinceCode}}">{{$data->ProvinceName}}</option>
			@endforeach
		</select>
      </div>
	  
	  
	 
	  <div class="form-group">
        <label class="form-label">Country Code</label>
        <select class="form-control" name="countrycode" id="countrycode">
		 @foreach ($country as $data)
			<option value="{{$data->CountryCode}}">{{$data->CountryName}}</option>
		@endforeach
		</select>
      </div>
	  </form>
	  
	  <div class="form-group">
        <label class="form-label">Customer Postal Code</label>
        <input name="customerpostalcode" class="form-control" value="{{ old('customerpostalcode') }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Phone Number</label>
        <input name="customerphonenumber" class="form-control" value="{{ old('customerphonenumber') }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Email</label>
        <input name="customeremail" class="form-control" value="{{ old('customeremail') }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Type ID</label>
        <input name="customertypeid" class="form-control" value="1"readonly>
      </div>
	  
	  <div class="form-group">
        <label class="form-label">User ID</label>
        <input name="userid" class="form-control" value="{{ old('userid') }}">
      </div>

      <div class="form-group">
        <button class="btn btn-primary btm-sm">Save</button>
      </div>
     

    </div>
  </div>
</div>
  
</form>

@endsection