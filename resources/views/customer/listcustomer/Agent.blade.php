@extends('layout.app')
@section('title','Upgrade Agent')


@section('content')

<form action="/customer/Agent/{{ $agent->CustomerId }}" method="POST">
  @csrf

<div class="content">
  <div class="row">
    <div class="col-sm-6">
      
      <div class="form-group">
        <label class="form-label">Customer Type ID</label>
        <input name="CustomerTypeID" class="form-control" value="2"readonly>
      </div>
    
      <div class="form-group">
        <label class="form-label">Organisation Name</label>
        <input name="OrganisationName" class="form-control" value="{{ $agent->OrganisationName }}">
      </div>
	  
	  <div class="form-group">
        <label class="form-label">Total Jamaah</label>
        <input name="TotalJamaah" class="form-control" value="{{ $agent->TotalJamaah }}">
      </div>
	  
	  
      <div class="form-group">
        <button class="btn btn-primary btm-sm">Save</button>
      </div>
     

    </div>
  </div>
</div>
  
</form>

@endsection