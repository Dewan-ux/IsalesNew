@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/tour" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data List Tour</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/tour/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                <div class="form-group">
        <label class="form-label">Tour Code</label>
        <input name="TourPriceCode" class="form-control" autofocus required>
      </div>

      <div class="form-group">
        <label class="form-label">Travel Name</label>
        <input name="TourTravelName" class="form-control" required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Tour Name</label>
        <input name="TourPriceName" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Tour Price</label>
        <input name="TourPrice" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Tour Itenary</label>
        <textarea type="text" name="TourItenary" class="form-control" rows="6" cols="80" required>
        </textarea>
      </div>

      <div class="form-group">
        <label class="form-label">Available Seets</label>
        <input name="TourAvailSeets" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Tour Image</label>
        <input type="file" name="TourImage" class="form-control" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

