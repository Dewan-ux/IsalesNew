@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/umroh" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Package Umroh</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/umroh/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                <div class="form-group">
        <label class="form-label">Package Code</label>
        <input name="PackageCode" class="form-control" autofocus required>
      </div>

      <div class="form-group">
        <label class="form-label">Travel Name</label>
        <input name="Penyelenggara" class="form-control" required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Package Name</label>
        <input name="PackageName" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Description</label>
        <textarea type="text" name="PackageDesc" class="form-control" rows="6" cols="80" required>
        </textarea>
      </div>

      <div class="form-group">
        <label class="form-label">Price</label>
        <input name="PackagePrice" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Available Seets</label>
        <input name="PackageAvailSeets" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Image</label>
        <input type="file" name="Image" class="form-control" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

