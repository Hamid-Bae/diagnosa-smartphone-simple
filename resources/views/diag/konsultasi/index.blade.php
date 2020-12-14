@extends('template.master')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper text-dark">
  <div class="p-3">
    <h2 class="mb-3">Konsultasi</h2>
    <div class="card card-dark">
        <div class="card-header">
          <h3 class="card-title">Data User</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" method="POST" action="/device">
          @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="device" class="col-sm-2 col-form-label">Smartphone</label>
              <div class="col-sm-10">
                <input type="text" name="device" class="form-control" id="device" placeholder="Jenis Smartphone">
              </div>
            </div>

            <button type="submit" class="btn btn-secondary px-3">Lanjut</button>
        </div>
        </form>
      </div>
  </div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection