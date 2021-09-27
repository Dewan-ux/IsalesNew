@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/pakethaji" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Package Haji</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/pakethaji/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                <div class="form-group">
        <label class="form-label">Package Haji Code</label>
        <input name="PackageHajiCode" class="form-control" autofocus required>
      </div>

      <div class="form-group">
        <label class="form-label">Travel Name</label>
        <input name="Penyelenggara" class="form-control" required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Package Name</label>
        <input name="PackageHajiName" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Description</label>
        <textarea type="text" name="PackageHajiDesc" class="form-control" rows="6" cols="80" required>
        </textarea>
      </div>

      <div class="form-group">
        <label class="form-label">Price</label>
        <input name="Price" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Available Seets</label>
        <input name="HajiAvailSeets" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Image</label>
        <input type="file" name="PackageHajiImage" class="form-control" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

