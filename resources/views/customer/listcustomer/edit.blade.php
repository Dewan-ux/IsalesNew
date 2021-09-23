@extends('layout.app')
@section('title','Edit Data')


@section('content')

<form action="{{ url('/customer/update',$cus->CustomerId) }}" method="POST">
  @csrf

<div class="content">
  <div class="row">
    <div class="col-sm-6">
      
      <div class="form-group">
        <label class="form-label">Customer First Name</label>
        <input name="CustomerFirstName" class="form-control" value="{{ $cus->CustomerFirstName }}">
        {{-- <div class="text-danger">
          @error('CustomerFirstName')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
    
      <div class="form-group">
        <label class="form-label">Customer Middle Name</label>
        <input name="CustomerMiddleName" class="form-control" value="{{ $cus->CustomerMiddleName }}">
        {{-- <div class="text-danger">
          @error('CustomerMiddleName')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Last Name</label>
        <input name="CustomerLastName" class="form-control" value="{{ $cus->CustomerLastName }}">
        {{-- <div class="text-danger">
          @error('CustomerLastName')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Identification</label>
        <input name="CustomerIdentification" class="form-control" value="{{ $cus->CustomerIdentification }}">
        {{-- <div class="text-danger">
          @error('CustomerIdentification')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Id Type Id</label>
        <input name="CustIDTypeID" class="form-control" value="{{ $cus->CustIDTypeID }}">
        {{-- <div class="text-danger">
          @error('CustIDTypeID')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Street Address</label>
        <input name="CustomerStreetAddress" class="form-control" value="{{ $cus->CustomerStreetAddress }}">
        {{-- <div class="text-danger">
          @error('CustomerStreetAddress')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  
	  <form action="/customer/edit/ {{ $cus->CustomerId }}">
	  <div class="form-group">
        <label class="form-label">City Code</label>
		<select class="form-control" name="CityCode" id="citycode" value="{{ $cus->CityCode }}">
			<option value="{{$cus->CityCode}}">{{$cus->CityCode}}--Code Awal Anda</option>
		 @foreach ($city as $data)
			<option value="{{$data->CityCode}}">{{$data->CityCode}}--{{$data->CityName}}</option>
		@endforeach
		</select>
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Province Code</label>
		<select class="form-control" name="ProvinceCode" id="provincecode" value="{{ $cus->ProvinceCode }}">
			<option value="{{$cus->ProvinceCode}}">{{$cus->ProvinceCode}}--Code Awal Anda</option>
			@foreach ($province as $data)
			<option value="{{$data->ProvinceCode}}">{{$data->ProvinceCode}}--{{$data->ProvinceName}}</option>
			@endforeach
		</select>
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Country Code</label>
        <select class="form-control" name="CountryCode" id="countrycode" value="{{ $cus->CountryCode }}">
		 <option value="{{$cus->CountryCode}}">{{$cus->CountryCode}}--Code Awal Anda</option>
		 @foreach ($country as $data)
			<option value="{{$data->CountryCode}}">{{$data->CountryCode}}--{{$data->CountryName}}</option>
		 @endforeach
		</select>
      </div>
	  </form>


	  <div class="form-group">
        <label class="form-label">Customer Postal Code</label>
        <input name="CustomerPostalCode" class="form-control" value="{{ $cus->CustomerPostalCode }}">
        {{-- <div class="text-danger">
          @error('CustomerPostalCode')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Phone Number</label>
        <input name="CustomerPhoneNumber" class="form-control" value="{{ $cus->CustomerPhoneNumber }}">
        {{-- <div class="text-danger">
          @error('CustomerPhoneNumber')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Email</label>
        <input name="CustomerEmail" class="form-control" value="{{ $cus->CustomerEmail }}">
        {{-- <div class="text-danger">
          @error('CustomerEmail')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Customer Type ID</label>
        <input name="CustomerTypeID" class="form-control" value="{{ $cus->CustomerTypeID }}">
        {{-- <div class="text-danger">
          @error('CustomerTypeID')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
	  <div class="form-group">
        <label class="form-label">User ID</label>
        <input name="UserID" class="form-control" value="{{ $cus->UserID }}">
        {{-- <div class="text-danger">
          @error('UserID')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
	  
      <div class="form-group">
        <button class="btn btn-primary btm-sm">Save</button>
      </div>
     

    </div>
  </div>
</div>
  
</form>

@endsection