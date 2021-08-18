@extends('layout.app')
@section('title','Edit Data')


@section('content')

<form action="/visa/update/{{ $visa->VisaTypeID }}" method="POST">
  @csrf

<div class="content">
  <div class="row">
    <div class="col-sm-6">
      
      <div class="form-group">
        <label class="form-label">Visa Type Code</label>
        <input name="visatypecode" class="form-control" value="{{ $visa->VisaTypeCode }}" readonly>
        {{-- <div class="text-danger">
          @error('VisaTypeCode')
              {{ $message }}
          @enderror
        </div> --}}
      </div>
    
      <div class="form-group">
        <label class="form-label">Visa Type Name</label>
        <input name="visatypename" class="form-control" value="{{ $visa->VisaTypeName }}">
        {{-- <div class="text-danger">
          @error('VisaTypeName')
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