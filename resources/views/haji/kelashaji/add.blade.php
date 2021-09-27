@extends('layout.app')
@section('title','Add Data')

@section('content')
      <div class="pull-left">
            <a href="/kelashaji" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Create Data Class Haji</h3>
            </div>

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/kelashaji/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
        <label class="form-label">Class Haji Code</label>
        <input type="text" name="ClassCode" class="form-control" placeholder="Class Haji Code" autofocus required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Class Haji Name</label>
        <input name="ClassName" class="form-control" placeholder="Class Haji Name" required>
      </div>

      <div class="form-group">
        <label class="form-label">Price</label>
        <input name="Price" class="form-control" placeholder="Price" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

