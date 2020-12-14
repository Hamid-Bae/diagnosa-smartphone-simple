@extends('template.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper text-dark">
        <div class=" p-3">
          <h2>Konsultasi</h2>
          <h5 class="mb-4">Akan disajikan pertanyaan bertuntun, silakan jawab ya atau tidak sesuai kondisi smartphone anda.</h5 class="mb-4">
            <a href="/question/{{$device->id}}" type="button" class="btn btn-secondary btn-flat">Lanjut</a>
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<!-- ./wrapper -->
@endsection