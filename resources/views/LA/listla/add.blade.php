@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/listla" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data LA List</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/listla/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
        <label class="form-label">LA Code</label>
        <input type="text" name="ListLaCode" class="form-control" autofocus required>
      </div>

      <div class="form-group">
        <label class="form-label">Travel Name</label>
        <input name="LaTravelName" class="form-control" required>
      </div>
    
      <div class="form-group">
        <label class="form-label">LA List Name</label>
        <input name="ListLaName" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Price</label>
        <input name="ListLaPrice" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">LA Itenary</label>
        <textarea type="text" name="LaItenary" class="form-control" rows="6" cols="80" required>
        </textarea>
      </div>

      <div class="form-group">
        <label class="form-label">Available Seets</label>
        <input name="LaAvailSeets" class="form-control" required>
      </div>

      <div class="form-group">
        <label class="form-label">Image</label>
        <input type="file" name="LaImage" class="form-control" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

