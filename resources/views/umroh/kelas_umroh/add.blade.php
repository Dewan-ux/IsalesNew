@extends('layout.app')
@section('title','Add Data')

@section('content')
        <div class="pull-left">
            <a href="/kelasumroh" class="btn btn-secondary btn-lg">
                <i class="fa fa-undo"></i> Back
            </a>
        </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Kelas Umroh</h3>
              
            </div>
            

        <!-- /.box-header -->
            <div class="box-body">
                <form action="/kelasumroh/insert" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="form-group">
        <label class="form-label">Kode Kelas Umroh</label>
        <input type="text" name="PackageClassCode" class="form-control" placeholder="Kode Kelas Umroh" autofocus required>
      </div>
    
      <div class="form-group">
        <label class="form-label">Nama Kelas Umroh</label>
        <input name="PackageClassName" class="form-control" placeholder="Nama Kelas Umroh" required>
      </div>

      <div class="form-group">
        <label class="form-label">Harga</label>
        <input name="Price" class="form-control" placeholder="Harga" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-success btm-sm">Save</button>
      </div>

            </div>


@endsection

